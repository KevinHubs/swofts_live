<?php

namespace App\Component\Process;

class Process{

    private  $token;
    public   $pid;
    public  function  __construct($token='')
    {
        $this->token=$token;
        $this->run();
        $this->signal();//信号监听
    }
    //获取任务,创建进程
    protected  function  run(){
        $process=$this->create_process();
        var_dump('pid:'.$this->pid);
        $process->write($this->token); //主进程管道写入
    }

    /**
     * 创建子进程
     */
    protected  function  create_process(){
//        $process=new \swoole_process([$this,'callback_function']);
        $process=new \swoole\Process([$this,'callback_function']);
        echo "创建process".PHP_EOL;
        $this->pid=$process->start(); //启动子进程
        return $process;
    }
    //子进程业务处理逻辑
    public  function callback_function(\swoole\Process $worker){
        //子进程接收
        var_dump('子进程业务处理逻辑');
        $res=$worker->read();
        //执行转码推流 ffmpeg
        $worker->exec('/home/ffmpeg/ffmpeg',
            [
                ' -i','25','-ar','44100','-acodec','mp3',
                'tmp://mobliestream.c3tv.com:554/live/goodtv.sdp',
                '-metadata', 'title="(token='.$res.')"','-vcodec',
                '-profile','baseline','-level:v','3.1','-tune',
                'zerolatency', '-preset','ultrafast','-vcodec',
                'libx264', '-f','flv', 'tcp://127.0.0.1:8099',
            ]
        );
       // -r 25 -ar 44100 -acodec mp3 -metadata title="[token=]"
        //  -profile baseline   -level:v 3.1  -tune zerolatency
        //    -preset ultrafast   -vcodec  libx264  -f flv  tcp://127.0.0.1:8099
    }
    //捕获子进程结束时的信号,回收子进程
    public  function  signal(){
        \swoole\process::signal(SIGCHLD, function($sig) {
            //必须为false，非阻塞模式
            while($ret = \swoole\process::wait(false)) {
            }
        });
    }

}
