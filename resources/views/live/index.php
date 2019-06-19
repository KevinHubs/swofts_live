<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="keywords" content="开源直播">
    <meta name="description" content="直播了，快来和我一起">
    <meta name="renderer" content="webkit">
    <meta name="referrer" content="origin-when-cross-origin">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <style>
        html {
            background: rgb(95, 152, 39);
        }

        #a1 {
            position: relative
        }

        #alimg {
            position: absolute
        }
    </style>
    <title>❤️直播系统❤️</title>
    <link rel="stylesheet" href="/static/css/v2style-fde3464643.css">
    <link rel="stylesheet" href="/static/css/font-awesome.min.css">

    <body class="live-skin">
        <div class="login-container islogin-false chat-false live-true mylive-false hide ">
            <div class="login-content">
                <div class="preview-container">
                    <div class="preview-live-content clearfix">
                        <p class="preview-title">
                            <img src="/static/picture/hotlive.png">正在直播
                        </p>
                        <ul class="preview-live-list"></ul>
                    </div>
                </div>
                <div class="layer-window-content login-layer">
                    <div class="layer-box">
                        <div class="login-box">
                            <div class="logo">
                                <img id="face" src="/static/picture/logo-momo.png" alt="">
                            </div>
                            <div class="login-form-content  from-login-page">
                                <div id="login-qr-code-register" class="login-qr-code hide">
                                    <span class="close-btn">返回</span>
                                    <p>扫描二维码</p>
                                    <p>感谢你的支持</p>
                                    <div>
                                        <img alt="">
                                    </div>
                                </div>
                                <div id="pre_hiden_login-info" class="login-info">
                                    <p class="clearfix">
                                        <span class="login-icon-box login-icon-user"></span>
                                        <input type="text" class="pre-momoid left" value="" id="pre-momoid-user"
                                            placeholder="请输入帐号/手机号/邮箱" name="momoid">
                                        <!--<a class="right go-to-btn" href="/mm_downloads" target="_blank">立即注册</a>-->
                                        <a class="right go-to-btn" id="qrcodebtn" href="javascript:goregist(0)">立即注册</a>
                                        <input class="hide" name="momoid">
                                    </p>
                                    <p class="clearfix">
                                        <span class="login-icon-box login-icon-lock"></span>
                                        <input type="text" class="hide" id="ie_login_tx" value="请输入密码">
                                        <input type="password" class="pre-password left" id="ie_login_pwd" value="" name="password" placeholder="请输入密码">
                                        <a class="right go-to-btn" href="" target="_blank">忘记密码</a>
                                    </p>

                                    <p class="clearfix msg"></p>
                                    <p id="codemsgerror"></p>
                                    <p class="clearfix">
                                        <input type="button" class="submit get-code" value="登录">
                                    </p>
                                </div>
                                <div class="login-form">
                                    <div class="code-pre-title">
                                        <h6>首次登录需要输入验证码</h6>
                                        <p>验证码已发送至: 客户端</p>
                                    </div>
                                    <ul class="code-border-list">
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                    <p class="code-box">
                                        <input type="text" name="code" class="codePre" maxlength="7">
                                        <span></span>
                                    </p>
                                    <div class="code-pre-container login-tip">
                                        <span>重新发送</span> 或者尝试
                                        <a href="">短信登录</a>
                                    </div>
                                    <p class="codemsg"></p>
                                    <p>
                                        <input type="button" class="submit submitcode" value="登录">
                                    </p>

                                </div>
                            </div>
                            <div class="login-other">
                                <i>或</i>
                                <p class="cut-line login-other-title">
                                    <span class="login-other-title">第三方号快速登录</span>
                                </p>
                                <a href="" target="_blank" class="wx-login">
                                    <img src="/static/picture/weixiniconn.png">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="login-footer">
                <a href="javascript:;" class="submit-feedback login-feedback">提交反馈</a>
            </div>
        </div>
        <div class="page-container ">
            <div class="page-window">
                <div class="operate-content clearfix">
                    <div class="notify-box left">
                        <div class="go-mylive-box left hide">
                            <a class="clearfix" href="javascript:;">
                                <i class="change-btn go-mylive"></i>
                                <p class="mylive-tip notify-tip">我的直播间</p>
                            </a>
                        </div>
                    </div>
                    <p class="myAnchor-guide-tip hide">
                        <span class="wx-reg-tip hide">快来观看热门直播吧
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </span>
                        <span class="ShowAnchor-tip">你关注的
                            <span class="onShowAnchor" data-num=""></span>个主播正在直播
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </span>
                    </p>
                    <div class="account-box right">
                        <span class="noname-login left">登录</span>
                    </div>
                </div>
                <div class="chat-container main-content clearfix view-container hide">
                    <div class="chat-box left">
                        <div class="tab">
                            <div class="tab_header">
                                <ul class="clearfix">
                                    <li class="close-talking-List" title="消息">
                                        <a href="javascript:;" class="on">
                                            <i class="icon-talking">
                                                <i class="new-msg-icon hide"></i>
                                            </i>
                                        </a>
                                    </li>
                                    <li class="tab-friend-List" title="好友">
                                        <a href="javascript:;">
                                            <i class="icon-friend"></i>
                                        </a>
                                    </li>
                                    <li class="tab-g-d-List" title="群组">
                                        <a href="javascript:;">
                                            <i class="icon-group"></i>
                                        </a>
                                    </li>
                                    <span class="slide-border"></span>
                                </ul>
                            </div>
                            <div class="search-content">
                                <input class="search-key" type="text" placeholder="搜索好友或者群组">
                                <div class="search-list-box hide">
                                    <ul class="search-list">
                                    </ul>
                                </div>
                            </div>
                            <div class="tab_content_container">
                                <div class="tab_content talking-box-inner current recentBox">
                                    <ul class="talking-list">
                                    </ul>
                                </div>
                                <div class="tab_content friend-list-content">
                                    <div class="tab_group_box friend-list-box">
                                        <div class="tab_group_head on clearfix">
                                            <span class="icon-box left">
                                                <i></i>
                                            </span>
                                            <p class="left">好友</p>
                                        </div>
                                        <ul class="friend-group-list friend-list">
                                            <img class="loading-holder" src="/static/picture/wait.gif">
                                        </ul>
                                    </div>
                                    <div class="tab_group_box follow-list-box">
                                        <div class="tab_group_head clearfix">
                                            <span class="icon-box left">
                                                <i></i>
                                            </span>
                                            <p class="left">关注</p>
                                        </div>
                                        <ul class="friend-group-list follow-list hide">
                                            <img class="loading-holder" src="/static/picture/wait.gif">
                                        </ul>
                                    </div>
                                    <div class="tab_group_box fans-list-box">
                                        <div class="tab_group_head clearfix">
                                            <span class="icon-box left">
                                                <i></i>
                                            </span>
                                            <p class="left">粉丝</p>
                                        </div>
                                        <ul class="friend-group-list fans-list hide">
                                            <img class="loading-holder" src="/static/picture/wait.gif">
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab_content">
                                    <ul class="group-list">
                                        <img class="loading-holder" src="/static/picture/wait.gif">
                                    </ul>
                                </div>
                                <div class="tab_content hi-list-content">
                                    <p class="back-to-recent">
                                        <i class="fa fa-chevron-left"></i>返回
                                    </p>
                                    <ul class="hi-list"></ul>
                                </div>
                                <div class="tab_content store-list-content">
                                    <p class="back-to-recent">
                                        <i class="fa fa-chevron-left"></i>返回
                                    </p>
                                    <ul class="store-list"></ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="talking-box left">
                        <div class="download-client-box">
                            <div class="download-client-title">
                                <a id="close-download-btn">关闭</a>
                            </div>
                            <div class="download-client-container">
                                <div class="title-box">
                                    <h1 class="">00000</h1>
                                </div>
                                <div class="container-box clearfix">
                                    <div class="download-btn-box left">
                                        <a class="download-btn" href="https://download.immomo.com/webmomo/momo_pc_beta_v0.2.3.exe" id="pc_download" target="_target">
                                            <i class="icon pc"></i>
                                            <p>Windows 7 或以上</p>
                                        </a>
                                    </div>
                                    <div class="download-btn-box last-ele left">
                                        <a class="download-btn" href="https://download.immomo.com/webmomo/momo_mac_beta_v0.2.3.dmg" id="mac_download" target="_target">
                                            <i class="icon mac"></i>
                                            <p>OS X10.8 或以上</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="talking-box-main hide">
                            <div class="talking-to"></div>
                            <div class="msg-screen-box">
                                <ul class="msg-list">
                                </ul>
                            </div>
                            <div class="edit-box chat-edit-box">
                                <div class="edit-box-inner clearfix">
                                    <span id="newMsgTips" class="new-msg-tips hide">下方有新消息</span>

                                    <div class="edit-btn-box">
                                        <div class="edit-extra-options clearfix">
                                            <i class="icon-face left">
                                                <div class="emotions-wrap fadeInUp animated hide">
                                                    <div class="tab_header">
                                                        <ul class="emotion-nav clearfix">
                                                        </ul>
                                                    </div>
                                                    <div class="tab_content_container emotions-content">
                                                        <div class="tab_content df-content current">
                                                            <ul class="emotion-list clearfix">
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </i>
                                            <i class="icon-file left compatible" title="可以在输入框直接粘贴图片"></i>
                                            <form id="upload-form">
                                                <input type="file" name="file" class="send-file hide" accept="image/*">
                                            </form>
                                            <i class="colorful-egg fa fa-bolt"></i>
                                            <div class="pre-egg-box hide fadeInUp animated">
                                                <img class="egg-holder" src="/static/picture/icon-egg.png">
                                                <p class="no-egg-msg">暂无可用彩蛋</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="edit-at-list-box hide">
                                        <ul class="edit-at-list"></ul>
                                    </div>
                                    <textarea class="edit-content"></textarea>
                                    <a class="send right">
                                        <i class="icon-send"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="chatroom-container main-content view-container hide">
                    <div class="chat-box left">
                        <div class="select-box">
                            <div class="selected-item" data-id="1">
                                <img src="/static/picture/6aafd0f5-1ce9-a38c-04e7-974c1d40585420151008_l.jpg" alt="">
                                <span class="selectname">大杂烩</span>
                                <i class="arrow fa fa-chevron-down"></i>
                            </div>
                            <ul class="option-list">
                            </ul>
                        </div>
                        <ul class="room-list clearfix">
                        </ul>
                    </div>
                    <div class="talking-box left">
                        <div class="talking-room">
                            <div class="room-talk-to-box clearfix"></div>
                            <div class="online-people-box clearfix hide">
                                <ul class="online-avatar-list clearfix">
                                </ul>
                            </div>
                        </div>
                        <div class="room-screen-box">
                            <ul class="room-msg-list">
                            </ul>
                        </div>
                        <div class="room-edit-box edit-box">
                            <div class="textarea_tips hide">
                                <i class="timedown"></i>秒后可以发言
                            </div>
                            <div class="edit-box-inner clearfix">
                                <span id="newMsgTips" class="new-msg-tips hide">下方有新消息</span>

                                <div class="edit-btn-box">
                                    <div class="edit-extra-options clearfix">
                                        <i class="icon-face left">
                                            <div class="emotions-wrap fadeInUp animated hide">
                                                <div class="tab_header">
                                                    <ul class="emotion-nav clearfix">
                                                    </ul>
                                                </div>
                                                <div class="tab_content_container emotions-content">
                                                    <div class="tab_content df-content current">
                                                        <ul class="emotion-list clearfix">
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </i>
                                        <i class="icon-file left compatible" title="可以在输入框直接粘贴图片"></i>
                                        <form id="upload-form">
                                            <input type="file" name="file" class="send-file hide" accept="image/*">
                                        </form>
                                        <i class="colorful-egg fa fa-bolt"></i>
                                        <div class="pre-egg-box hide fadeInUp animated">
                                            <img class="egg-holder" src="/static/picture/icon-egg.png">
                                            <p class="no-egg-msg">暂无可用彩蛋</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="edit-at-list-box hide">
                                    <ul class="edit-at-list"></ul>
                                </div>
                                <textarea class="edit-content"></textarea>
                                <a class="send right">
                                    <i class="icon-send"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mylive-container main-content hide">
                    <div class="mylive-page-window">
                        <div class="myliveRoom-box">
                            <!--我的直播间-->
                            <div class="myliveRoomContainer">
                                <div class="myliveRoomContent">
                                    <div class="myliveAnchorBox clearfix"></div>
                                    <div class="mylivePlayerContainerBox">
                                        <div class="mylivePlayerContainer">
                                            <div class="mylivePlayerContent" id="mylivePlayerContent">

                                            </div>
                                        </div>
                                        <div class="myliveGiftDrawerBox">
                                            <div class="myliveGiftEffect">
                                                <ul class="myliveGiftEffectList">
                                                    <li class="myliveGiftEffectItem first"></li>
                                                    <li class="myliveGiftEffectItem second"></li>
                                                    <li class="myliveGiftEffectItem third"></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="myliveChatBox">
                                        <!--  <p class="scrollBtn onScroll">
                                <span class="toggle-btn-top">滚屏</span>
                            </p> -->
                                        <div class="mylive-chat-msg-box">
                                            <ul class="mylive-msg-list clearfix">
                                            </ul>
                                        </div>
                                        <div class="mylive-new-msg-tip hide">
                                            <span class="tipText">底部有新消息</span>
                                        </div>
                                        <div class="R-enter-box">
                                            <ul class="R-enter-list">
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="myliveAttractionContainer">
                                <div class="myliveAttractionBox">
                                    <div class="myliveAttractionContent">
                                        <div class="myliveFansAttraction">
                                            <div class="tab_header">
                                                <ul class="clearfix">
                                                    <li class="tab-myliveStarCharts">
                                                        <a href="javascript:;" class="on">在线用户</a>
                                                    </li>
                                                    <li class="tab-myliveOnline">
                                                        <a href="javascript:;">排行榜</a>
                                                    </li>
                                                    <span class="myliveFansAttraction-slide-border"></span>
                                                </ul>
                                            </div>
                                            <div class="tab_content_container">
                                                <div class="tab_content myliveStarCharts current">
                                                    <ul class="myliveRankingList">
                                                    </ul>
                                                    <!-- <div class="rankingListMask"></div> -->
                                                </div>

                                                <div class="tab_content myliveOnline current">
                                                    <ul class="myliveOnlineList">
                                                        <li class="onlineItem">
                                                            <ul class="userList myliveMasterList">
                                                            </ul>
                                                        </li>
                                                        <li class="onlineItem">
                                                            <ul class="userList myliveLayfolkList">
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                    <!-- <div class="myliveOnlineMask"></div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="myliveGiftAttraction">
                                            <div class="myliveGiftAttractionTitle">礼物记录</div>
                                            <div class="myliveGiftAttractionListBox">
                                                <ul class="myliveGiftAttractionList">
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="myliveOnlineMore"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="live-container main-content">
                    <div class="live-page-window">
                        <!--左侧信息盒子-->
                        <div class="information-box left">
                            <div class="informationContent">
                                <div class="roomListContainer">
                                    <div class="roomList  noLive">
                                        <img class="liveShowIcon" src="/static/picture/hotlive.png" alt="">
                                        <span class="liveShow">热门直播</span>
                                        <span class="myAnchor hide">我的主播</span>
                                        <div class="recommend-live-list-box recommend-nolive-list-box jspScrollable" tabindex="0" style="overflow: hidden; padding: 0px; width: 240px;">



                                            <div id="jspContainer_scol" class="jspContainer" style="width: 240px; height: 520px;">
                                                <div id="jspPane_scol" class="jspPane" style="padding: 0px; top: 0px; width: 227px;">
                                                    <ul class="liveRoomLists liveRoomList clearfix liveShow-list noLiveRoomList">
                                                        <li class="liveShowItem roomDetail left" data-rid="1461557406073" data-rtype="2" data-momoid="359854792">
                                                            <div class="roomImgWrap">
                                                                <img class="roomImg" src="/static/picture/78077fb7-f254-3d74-e08e-03078c47c75020170829_400x400.jpg" alt="">
                                                            </div>
                                                            <div class="roomMsg">
                                                                <p class="liveShowRoom">零基础小白课程</p>
                                                                <p class="onWatchUser">110在看</p>
                                                            </div>
                                                            <img class="deviceIcon" src="/static/picture/phoneicon.png"
                                                                alt="">
                                                        </li>
                                                        <li class="liveShowItem roomDetail left" data-rid="15003695234898" data-rtype="2" data-momoid="499419422">
                                                            <div class="roomImgWrap">
                                                                <img class="roomImg" src="/static/picture/0169c94d-eece-2206-16d7-199ef8035d7f20170901_400x400.jpg" alt="">
                                                            </div>
                                                            <div class="roomMsg">
                                                                <p class="liveShowRoom">微服务大牛班级</p>
                                                                <p class="onWatchUser">10在看</p>
                                                            </div>
                                                            <img class="deviceIcon" src="/static/picture/phoneicon.png"
                                                                alt="">
                                                        </li>
                                                        <li class="liveShowItem roomDetail left" data-rid="15009046164129" data-rtype="2" data-momoid="522042799">
                                                            <div class="roomImgWrap">
                                                                <img class="roomImg" src="/static/picture/8e63c7c1-22f5-712f-b587-1c0667a4ae8c20170829_400x400.jpg" alt="">
                                                            </div>
                                                            <div class="roomMsg">
                                                                <p class="liveShowRoom">零基础小白课程</p>
                                                                <p class="onWatchUser">4在看</p>
                                                            </div>
                                                            <img class="deviceIcon" src="/static/picture/phoneicon.png"
                                                                alt="">
                                                        </li>
                                                        <li class="liveShowItem roomDetail left" data-rid="1469451122093" data-rtype="2" data-momoid="141708200">
                                                            <div class="roomImgWrap">
                                                                <img class="roomImg" src="/static/picture/245e575b-9caa-6444-02bd-9c9f981938c820170804_400x400.jpg" alt="">
                                                            </div>
                                                            <div class="roomMsg">
                                                                <p class="liveShowRoom">零基础小白课程</p>
                                                                <p class="onWatchUser">143在看</p>
                                                            </div>
                                                            <img class="deviceIcon" src="/static/picture/phoneicon.png"
                                                                alt="">
                                                        </li>
                                                        <li class="liveShowItem roomDetail left" data-rid="14984900512326" data-rtype="2" data-momoid="509083772">
                                                            <div class="roomImgWrap">
                                                                <img class="roomImg" src="/static/picture/13192eb0-306d-a6a7-b948-a033751c950220170626_400x400.jpg" alt="">
                                                            </div>
                                                            <div class="roomMsg">
                                                                <p class="liveShowRoom">零基础小白课程</p>
                                                                <p class="onWatchUser">2在看</p>
                                                            </div>
                                                            <img class="deviceIcon" src="/static/picture/phoneicon.png"
                                                                alt="">
                                                        </li>
                                                        <li class="liveShowItem roomDetail left" data-rid="14954687110771" data-rtype="2" data-momoid="493535752">
                                                            <div class="roomImgWrap">
                                                                <img class="roomImg" src="/static/picture/9a938bc8-773f-0b4d-498d-796ea3328ecd20170614_400x400.jpg" alt="">
                                                            </div>
                                                            <div class="roomMsg">
                                                                <p class="liveShowRoom">零基础小白课程</p>
                                                                <p class="onWatchUser">17在看</p>
                                                            </div>
                                                            <img class="deviceIcon" src="/static/picture/phoneicon.png"
                                                                alt="">
                                                        </li>
                                                    </ul>
                                                    <ul class="liveRoomLists liveAnchorList clearfix anchor-liveShow-list noLiveRoomList hide">
                                                    </ul>
                                                    <div class="more">
                                                        <p class="seeMore">查看更多</p>
                                                    </div>
                                                </div>
                                                <div class="jspVerticalBar" style="opacity: 0;">
                                                    <div class="jspCap jspCapTop"></div>
                                                    <div class="jspTrack" style="height: 520px;"></div>
                                                    <div class="jspCap jspCapBottom"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="roomMore"></div>

                            </div>
                        </div>
                        <!--右侧直播间盒子-->
                        <div class="liveRoom-box right">
                            <!--直播间-->
                            <div class="liveRoomContainer">
                                <div class="liveRoomContent mobile-video">
                                    <div class="playerHeader">
                                        <!--播主信息-->
                                        <div class="anchor">
                                            <div class="anchorMessage" data-stid="381982007" data-roomname="过好每一天❣" data-anchorname="peter 老师微服务班级" data-mtoken="186f602caa63a81b7efdf78fbfae1edd"
                                                data-stoken="">
                                                <div class="anchorInfo">
                                                    <img class="anchorIcon" src="/static/picture/36098b4d-ec75-1e9f-f4fc-6cec04db37a920170627_s.jpg" alt="">
                                                    <div class="anchorMsg">
                                                        <p class="anchorName">欢迎小昕昕：</p>
                                                        <p class="roomName">正在直播</p>
                                                        <div class="fans">
                                                            <span class="focusBtn noFod"> 关注 </span>
                                                            <div class="starVal">
                                                                <div class="starIcon">
                                                                    <img class="starImg" src="/static/picture/star.png" alt="">星光
                                                                </div>
                                                                <strong class="starNum star">1万</strong>
                                                            </div>
                                                            <div class="starVal">
                                                                <div class="starIcon">粉丝</div>
                                                                <strong class="starNum fllow">0</strong>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="close right">
                                                        <!--  <span class="closeTitle">关闭</span> -->
                                                    </div>
                                                    <div class="share right">
                                                        <!--        <p class="goShare">
                 分享
                 <i class="fa fa-angle-down"></i>
            </p> -->
                                                        <div class="shareContainer" id="shareContainer"></div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="playerContainerBox left">
                                        <div class="playerContainer clearfix">
                                            <div id="playerContent" class="playerContent  mobile-device" data-rd="14676929621511" data-sid="1504256866220253" data-token="da6565e8ee1e0dd4e609d1f7e524cfe2"
                                                data-mtoken="186f602caa63a81b7efdf78fbfae1edd" data-rtype="2" data-title="过好每一天❣"
                                                data-avatar="https://img.momocdn.com/album/36/09/36098B4D-EC75-1E9F-F4FC-6CEC04DB37A920170627_S.jpg"
                                                data-momoid="381982007">
                                                <!-- <div id="flowplayer123" class="flowplayer123 "><object width="100%" height="100%" id="flowplayer_api" name="flowplayer_api" data="http://127.0.0.1/momo-master/Public//static/zhibo/flowplayer-3.2.18.swf123" type="application/x-shockwave-flash"><param name="allowscriptaccess" value="always"><param name="quality" value="best"><param name="bgcolor" value="#000000"><param name="wmode" value="opaque"><param name="flashvars" value="config={&quot;plugins&quot;:{&quot;controls&quot;:null},&quot;playlist&quot;:[{&quot;url&quot;:&quot;http://wb-hdl6.v.momocdn.com/mlive/m_200b1264acff39321504256866169108.flv?r%3D2d01d4f9239a2146&quot;}],&quot;playerId&quot;:&quot;flowplayer&quot;,&quot;clip&quot;:{}}"></object><span class="worth_word first moved" style="left: -410px;">💫品位孤独✨:好听，❤动了💞💞💞💞💞💞💞💞💞💞💞💞💞💞</span></div> -->
                                                <div id="a1" class="fl-ui">
                                                    <!--  <div class="video clearfix">
																												<div class="float_called"></div>
																										</div> -->
                                                    <p class="onWatch">134在看</p>
                                                    <p class="anchor-info">
                                                        <img class="live-layer-logo" src="/static/picture/momo_word_bg_white.png">
                                                        <span class="live-layer-momoid">0000000</span>
                                                    </p>
                                                    <div class="control-bar visible">
                                                        <i class="play-btn"></i>
                                                        <div class="right">
                                                            <i class="gift-btn" title="关闭礼物"></i>
                                                            <i class="danmu-btn" title="关闭弹幕"></i>
                                                            <i class="volume-btn"></i>
                                                            <div class="volume-slider">
                                                                <div class="volume-level" style="width: 100%;"></div>
                                                            </div>
                                                            <i class="fullscreen-btn"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="playerErrorShadow">Error</div>
                                        <div class="liveGiftDrawerBox">
                                            <div class="liveGiftEffect">
                                                <ul class="liveGiftEffectList">
                                                    <li class="liveGiftEffectItem first"></li>
                                                    <li class="liveGiftEffectItem second"></li>
                                                    <li class="liveGiftEffectItem third"></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="live-chat-box clearfix">
                                        <div class="chat-box-inner clearfix">
                                            <!--   <p class="scrollBtn onScroll">
	                                <span class="toggle-btn-top">滚屏</span>
	                            </p> -->
                                            <div class="chat-msg-box" style="overflow: hidden; padding: 0px; width: 180px;">

                                                <div id="jspContainer_message" class="jspContainer" style="width: 180px; height: 450px;">
                                                    <div id="jspPane_message" class="jspPane" style="padding: 0px; top: 0px; left: 0px; width: 180px;">
                                                        <ul id="appendillist" class="live-msg-list clearfix">

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="live-R-enter-box">
                                            <ul class="live-R-enter-list">
                                                <li class="live-R-enter-item fortune-0-4 current" style="margin-left: 0%; top: 0px;"></li>
                                                <li class="live-R-enter-item fortune-10-19 current" style="margin-left: 0%; top: 0px;"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="live-edit-box">
                                        <div class="live-edit-box-inner">
                                            <span id="liveNewMsgTips" class="live-new-msg-tips hide">底部有新消息</span>
                                            <div class="editAreaWrap">
                                                <p class="barrageBtn">
                                                    <label class="setting-toggle" data-bind="barrage-on-off">
                                                        <img class="toggle-btn barrage-toggle" src="/static/picture/barragebc.png" alt="">
                                                        <img class="toggle-btn-top" src="/static/picture/barraget.png"
                                                            alt="">
                                                        <span class="barrageText">弹</span>
                                                    </label>
                                                </p>
                                                <input class="editArea" onkeydown="chat.keySend(event);" value="" placeholder="快和大家一起聊天吧">
                                            </div>
                                            <span onclick="chat.sendMessage()" class="sendBtn">发送</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--粉丝贡献-->
                            <div class="attraction clearfix">
                                <div class="attractionContent">
                                    <!-- 排行榜-->
                                    <div class="fansAttraction">
                                        <div class="tab_header">
                                            <ul class="clearfix">
                                                <li class="tab-starCharts" style="width: 50%;">
                                                    <a href="javascript:;" class="on">在线用户</a>
                                                </li>
                                                <li class="tab-onlineUser" style="width: 50%;">
                                                    <a href="javascript:;">排行榜</a>
                                                </li>
                                                <span class="fansAttraction-slide-border" style="width: 50%;"></span>
                                            </ul>
                                        </div>
                                        <div class="tab_content_container">
                                            <div class="tab_content starCharts current jspScrollable" tabindex="0" style="overflow: hidden; padding: 0px; width: 188px;">

                                                <div class="jspContainer" style="width: 188px; height: 262px;">
                                                    <div id="right-jspPane" class="jspPane" style="padding: 0px; top: 0px; left: 0px; width: 175px;">
                                                        <ul id="appendrankingList" class="rankingList">

                                                        </ul>
                                                    </div>
                                                    <div class="jspVerticalBar" style="opacity: 0;">
                                                        <div class="jspCap jspCapTop"></div>
                                                        <div class="jspTrack" style="height: 262px;"></div>
                                                        <div class="jspCap jspCapBottom"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab_content onlineUsers" style="overflow: hidden; padding: 0px; width: 191px;">

                                                <div class="jspContainer" style="width: 191px; height: 261px;">
                                                    <div class="jspPane" style="padding: 0px; top: 0px; left: 0px; width: 191px;">
                                                        <ul class="onlineList clearfix">
                                                            <li class="onlineItem onlineMaster">
                                                                <ul class="userList masterList"></ul>
                                                            </li>
                                                            <li class="onlineItem onlineLayfolk">
                                                                <ul class="userList layfolkList">



                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- PK选手-->
                                    <div class="pkShow-box clearfix" style="display: none;">
                                        <ul class="pkShow"></ul>
                                    </div>

                                    <!--礼物-->
                                    <div class="gift-box-wrap jspScrollable" tabindex="0" style="overflow: hidden; padding: 0px; height: 253px; width: 189px;">

                                        <div class="jspContainer" style="width: 189px; height: 253px;">
                                            <div class="jspPane" style="padding: 0px; top: 0px; left: 0px; width: 176px;">
                                                <ul class="gift-box clearfix">
                                                    <li data-battercount="0" class="giftItem left" data-index="0" data-giftid="1441528747" data-giftprice="9" data-giftname="棒棒糖"
                                                        data-giftimg="https://img.momocdn.com/live/CA/8D/CA8DC5B3-53ED-4102-2622-2BB875B97EFA20160819_S.png"
                                                        data-giftvalue="9币" data-token="f6308cefbf275c63567d27bb033be648">
                                                        <img id="rocket" class="giftIcon" src="/static/picture/ca8dc5b3-53ed-4102-2622-2bb875b97efa20160819_s.png"
                                                            alt="">
                                                        <p class="giftValue">9&nbsp;币</p>
                                                    </li>
                                                    <li data-battercount="0" class="giftItem left" data-index="1" data-giftid="1500289749999" data-giftprice="199" data-giftname="Free style"
                                                        data-giftimg="https://img.momocdn.com/live/6D/A7/6DA7387A-C609-C48D-50F7-8C620B50094820170718_S.png"
                                                        data-giftvalue="199币" data-token="595f2c4433cd6d6724ceaa4f2a51f958">
                                                        <img class="giftIcon" src="/static/picture/6da7387a-c609-c48d-50f7-8c620b50094820170718_s.png"
                                                            alt="">
                                                        <p class="giftValue">199&nbsp;币</p>
                                                    </li>
                                                    <li data-battercount="0" class="giftItem left" data-index="2" data-giftid="1471589183" data-giftprice="19" data-giftname="喜欢你"
                                                        data-giftimg="https://img.momocdn.com/live/A2/78/A2787AF6-F910-CB68-C88F-B5925A8D653C20160819_S.png"
                                                        data-giftvalue="19币" data-token="6b53f3d10d44e0e64ea82fa966bb157d">
                                                        <img class="giftIcon" src="/static/picture/a2787af6-f910-cb68-c88f-b5925a8d653c20160819_s.png"
                                                            alt="">
                                                        <p class="giftValue">19&nbsp;币</p>
                                                    </li>
                                                    <li data-battercount="0" class="giftItem left" data-index="3" data-giftid="1450928358" data-giftprice="99" data-giftname="金话筒"
                                                        data-giftimg="https://img.momocdn.com/live/F2/C8/F2C8A270-CE92-F9B6-D65E-892E8F64830420160825_S.png"
                                                        data-giftvalue="99币" data-token="3127a9b8b4056208ab4ad37e2080e29e">
                                                        <img class="giftIcon" src="/static/picture/f2c8a270-ce92-f9b6-d65e-892e8f64830420160825_s.png"
                                                            alt="">
                                                        <p class="giftValue">99&nbsp;币</p>
                                                    </li>
                                                    <li data-battercount="0" class="giftItem left" data-index="4" data-giftid="1495104501" data-giftprice="520" data-giftname="守护之心"
                                                        data-giftimg="https://img.momocdn.com/live/3C/12/3C120B4B-4840-55B3-C110-421F7B5D81DB20170518_S.png"
                                                        data-giftvalue="520币" data-token="3db9b5f86f7fd3b49af7a11a9304bfbb">
                                                        <img class="giftIcon" src="/static/picture/3c120b4b-4840-55b3-c110-421f7b5d81db20170518_s.png"
                                                            alt="">
                                                        <p class="giftValue">520&nbsp;币</p>
                                                    </li>
                                                    <li data-battercount="0" class="giftItem left" data-index="5" data-giftid="1470989917" data-giftprice="999" data-giftname="跑车"
                                                        data-giftimg="https://img.momocdn.com/live/0F/1C/0F1C4114-4081-084E-DF3F-86283EDDA0E120170606_S.png"
                                                        data-giftvalue="999币" data-token="6ccc7accf7c98a18a2dd486edce9a18f">
                                                        <img class="giftIcon" src="/static/picture/0f1c4114-4081-084e-df3f-86283edda0e120170606_s.png"
                                                            alt="">
                                                        <p class="giftValue">999&nbsp;币</p>
                                                    </li>
                                                    <li data-battercount="0" class="giftItem left" data-index="6" data-giftid="1470991460" data-giftprice="6999" data-giftname="游艇"
                                                        data-giftimg="https://img.momocdn.com/live/80/C7/80C79923-D3DA-3DCB-2B32-F089111923FC20170606_S.png"
                                                        data-giftvalue="6999币" data-token="f9fe7bab9aa52e053f51c7debfdde01c">
                                                        <img class="giftIcon" src="/static/picture/80c79923-d3da-3dcb-2b32-f089111923fc20170606_s.png"
                                                            alt="">
                                                        <p class="giftValue">6999&nbsp;币</p>
                                                    </li>
                                                    <li data-battercount="0" class="giftItem left" data-index="7" data-giftid="1471006784" data-giftprice="18888" data-giftname="爱心火箭"
                                                        data-giftimg="https://img.momocdn.com/live/9C/B3/9CB3DF59-AA19-22FF-B609-264639B1840320160913_S.png"
                                                        data-giftvalue="18888币" data-token="501b1cc682b50e7d4a3fc64d8361ca73">
                                                        <img class="giftIcon" src="/static/picture/9cb3df59-aa19-22ff-b609-264639b1840320160913_s.png"
                                                            alt="">
                                                        <p class="giftValue">18888&nbsp;币</p>
                                                    </li>
                                                    <li data-battercount="0" class="giftItem left" data-index="8" data-giftid="1450928168" data-giftprice="19" data-giftname="么么哒"
                                                        data-giftimg="https://img.momocdn.com/live/DF/77/DF77D99F-C745-0468-DE28-2A06270B449120160819_S.png"
                                                        data-giftvalue="19币" data-token="1da6548ee854cddb0facd838a9bec6e1">
                                                        <img class="giftIcon" src="/static/picture/df77d99f-c745-0468-de28-2a06270b449120160819_s.png"
                                                            alt="">
                                                        <p class="giftValue">19&nbsp;币</p>
                                                    </li>
                                                    <li data-battercount="0" class="giftItem left" data-index="9" data-giftid="1474443711" data-giftprice="199" data-giftname="戳戳脸"
                                                        data-giftimg="https://img.momocdn.com/live/93/6E/936E7253-D64A-3B00-4508-2E997A5FABF320161207_S.png"
                                                        data-giftvalue="199币" data-token="cc0f5ad24c098e2b35d99ed534d1de3a">
                                                        <img class="giftIcon" src="/static/picture/936e7253-d64a-3b00-4508-2e997a5fabf320161207_s.png"
                                                            alt="">
                                                        <p class="giftValue">199&nbsp;币</p>
                                                    </li>
                                                    <li data-battercount="0" class="giftItem left" data-index="10" data-giftid="1450928658" data-giftprice="999" data-giftname="熊子奖杯"
                                                        data-giftimg="https://img.momocdn.com/live/E5/FD/E5FD3FAE-6281-050E-16FA-488F76FE60AE20160819_S.png"
                                                        data-giftvalue="999币" data-token="8990f982a75bec03033c3d942c17a196">
                                                        <img class="giftIcon" src="/static/picture/e5fd3fae-6281-050e-16fa-488f76fe60ae20160819_s.png"
                                                            alt="">
                                                        <p class="giftValue">999&nbsp;币</p>
                                                    </li>
                                                    <li data-battercount="0" class="giftItem left" data-index="11" data-giftid="1484045738" data-giftprice="99" data-giftname="爱在17"
                                                        data-giftimg="https://img.momocdn.com/live/85/F0/85F052F3-9E8F-AA28-0B70-1482C2F0EE6A20170110_S.png"
                                                        data-giftvalue="99币" data-token="0624109a6a64bc91fa47307237a45d25">
                                                        <img class="giftIcon" src="/static/picture/85f052f3-9e8f-aa28-0b70-1482c2f0ee6a20170110_s.png"
                                                            alt="">
                                                        <p class="giftValue">99&nbsp;币</p>
                                                    </li>
                                                    <li data-battercount="0" class="giftItem left" data-index="12" data-giftid="1493809246" data-giftprice="99" data-giftname="夏花"
                                                        data-giftimg="https://img.momocdn.com/live/6E/6D/6E6D3BD9-0142-BA0F-3558-06DF4642077020170504_S.png"
                                                        data-giftvalue="99币" data-token="67d1e89aa467777626c7e1e131bd29f1">
                                                        <img class="giftIcon" src="/static/picture/6e6d3bd9-0142-ba0f-3558-06df4642077020170504_s.png"
                                                            alt="">
                                                        <p class="giftValue">99&nbsp;币</p>
                                                    </li>
                                                    <li data-battercount="0" class="giftItem left" data-index="13" data-giftid="1479369735" data-giftprice="520" data-giftname="水晶之冠"
                                                        data-giftimg="https://img.momocdn.com/live/EE/41/EE41FA94-407E-B6BA-6DB0-4AB28504CD4B20161123_S.png"
                                                        data-giftvalue="520币" data-token="94a0d825d9f8a787792bd4bd04aa9131">
                                                        <img class="giftIcon" src="/static/picture/ee41fa94-407e-b6ba-6db0-4ab28504cd4b20161123_s.png"
                                                            alt="">
                                                        <p class="giftValue">520&nbsp;币</p>
                                                    </li>
                                                    <li data-battercount="0" class="giftItem left" data-index="14" data-giftid="1477978817" data-giftprice="99" data-giftname="幸运草"
                                                        data-giftimg="https://img.momocdn.com/live/8C/CD/8CCD6932-0331-CCC2-B389-67884EB5B59620161124_S.png"
                                                        data-giftvalue="99币" data-token="70fa6e475b156d94cbcb3d2ddbd9614b">
                                                        <img class="giftIcon" src="/static/picture/8ccd6932-0331-ccc2-b389-67884eb5b59620161124_s.png"
                                                            alt="">
                                                        <p class="giftValue">99&nbsp;币</p>
                                                    </li>
                                                    <li data-battercount="0" class="giftItem left" data-index="15" data-giftid="1475061506" data-giftprice="520" data-giftname="我爱你"
                                                        data-giftimg="https://img.momocdn.com/live/BD/C6/BDC63061-4414-7472-D5DC-AAD1E947850B20161123_S.png"
                                                        data-giftvalue="520币" data-token="cccf81ca478f0f10749306d354acb15c">
                                                        <img class="giftIcon" src="/static/picture/bdc63061-4414-7472-d5dc-aad1e947850b20161123_s.png"
                                                            alt="">
                                                        <p class="giftValue">520&nbsp;币</p>
                                                    </li>
                                                    <li data-battercount="0" class="giftItem left" data-index="16" data-giftid="1476433578" data-giftprice="199" data-giftname="拿去花吧"
                                                        data-giftimg="https://img.momocdn.com/live/09/61/0961F6AB-D137-C8DC-2681-9EB2A95DF19320161124_S.png"
                                                        data-giftvalue="199币" data-token="4e7617e9441a2ee9bf8e684e05d0f804">
                                                        <img class="giftIcon" src="/static/picture/0961f6ab-d137-c8dc-2681-9eb2a95df19320161124_s.png"
                                                            alt="">
                                                        <p class="giftValue">199&nbsp;币</p>
                                                    </li>
                                                    <li data-battercount="0" class="giftItem left" data-index="17" data-giftid="1493376250" data-giftprice="19" data-giftname="臭鸡蛋"
                                                        data-giftimg="https://img.momocdn.com/live/8E/8A/8E8A0D13-71AC-ABFF-9A01-61C5EE5071BA20170503_S.png"
                                                        data-giftvalue="19币" data-token="b031b185b60770acfd0fe8d25200447a">
                                                        <img class="giftIcon" src="/static/picture/8e8a0d13-71ac-abff-9a01-61c5ee5071ba20170503_s.png"
                                                            alt="">
                                                        <p class="giftValue">19&nbsp;币</p>
                                                    </li>
                                                    <li data-battercount="0" class="giftItem left" data-index="18" data-giftid="1493892280" data-giftprice="233" data-giftname="恶作剧便便"
                                                        data-giftimg="https://img.momocdn.com/live/DC/80/DC80A0B3-9681-E52A-3545-CB57FF8B2F9320170504_S.png"
                                                        data-giftvalue="233币" data-token="4849ce5c7351c59a24c092917aa71c69">
                                                        <img class="giftIcon" src="/static/picture/dc80a0b3-9681-e52a-3545-cb57ff8b2f9320170504_s.png"
                                                            alt="">
                                                        <p class="giftValue">233&nbsp;币</p>
                                                    </li>
                                                    <li data-battercount="0" class="giftItem left" data-index="19" data-giftid="1450927910" data-giftprice="1" data-giftname="掌声"
                                                        data-giftimg="https://img.momocdn.com/live/BB/23/BB230FF4-E416-F8B9-BF68-A54ADD7663A420160819_S.png"
                                                        data-giftvalue="1币" data-token="b48072dc6758eba97a596ea888745ea3">
                                                        <img class="giftIcon" src="/static/picture/bb230ff4-e416-f8b9-bf68-a54add7663a420160819_s.png"
                                                            alt="">
                                                        <p class="giftValue">1&nbsp;币</p>
                                                    </li>
                                                    <li data-battercount="0" class="giftItem left" data-index="20" data-giftid="1481169087" data-giftprice="99" data-giftname="666"
                                                        data-giftimg="https://img.momocdn.com/live/1C/A9/1CA94466-95C0-5F77-BD7F-3BE5035C5BF220161208_S.png"
                                                        data-giftvalue="99币" data-token="2b132116f86d6716a5b83eeb9f8a6e9e">
                                                        <img class="giftIcon" src="/static/picture/1ca94466-95c0-5f77-bd7f-3be5035c5bf220161208_s.png"
                                                            alt="">
                                                        <p class="giftValue">99&nbsp;币</p>
                                                    </li>
                                                    <li data-battercount="0" class="giftItem left" data-index="21" data-giftid="1471588768" data-giftprice="9" data-giftname="去污皂"
                                                        data-giftimg="https://img.momocdn.com/live/D5/FC/D5FCA694-F8CE-D638-BC77-E8C02A12454520160824_S.png"
                                                        data-giftvalue="9币" data-token="fae25869ab22eae8d4e25554dca114ce">
                                                        <img class="giftIcon" src="/static/picture/d5fca694-f8ce-d638-bc77-e8c02a12454520160824_s.png"
                                                            alt="">
                                                        <p class="giftValue">9&nbsp;币</p>
                                                    </li>
                                                    <div class="giftItem payItem left">
                                                        <a target="_blank" href="https://127.0.0.1/pay">
                                                            <p class="pay">充值</p>
                                                        </a>
                                                    </div>
                                                </ul>
                                            </div>
                                            <div class="jspVerticalBar">
                                                <div class="jspCap jspCapTop"></div>
                                                <div class="jspTrack" style="height: 253px;"></div>
                                                <div class="jspCap jspCapBottom"></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="playerToolTipContainer"></div>
                                <div class="giftTipWrap"></div>
                                <div class="onlineMore">
                                    <span class="errorMsg">已没有更多</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <audio id="auto-msg" class="hide" preload="none" src="" autoplay="">当前浏览器版本不支持语音播放</audio>
        <div id="clicklogin" class="layer hide false">
            <span class="closeLayer"></span>
            <div class="layer-window-content login-layer">
                <div class="layer-box">
                    <div class="login-box fadeInDown animated">
                        <div class="logo">
                            <img id="lface" src="/static/picture/logo-momo.png" alt="">
                        </div>
                        <div id="hidenregist" class="login-form-content  from-layer-login">
                            <div id="before_login_regist" class="login-qr-code hide">
                                <span class="close-btn">返回</span>
                                <p>注册用户</p>
                                <div>
                                    <p class="clearfix">
                                        <span class="login-icon-box login-icon-user"></span>
                                        <input type="text" class="pre-momoid left" id="premomoiduserreg" value=""
                                            placeholder="请输入帐号/手机号/邮箱" name="momouser">
                                        <!--<a class="right go-to-btn" href="/mm_downloads" target="_blank">立即注册</a>-->
                                        <input class="hide" name="momoid">
                                    </p>
                                    <p class="clearfix">
                                        <span class="login-icon-box login-icon-lock"></span>
                                        <input type="text" class="hide" id="ie_login_tx" value="请输入密码">
                                        <input type="password" class="pre-password left" id="ie_login_pwd_regist" value="" name="password" placeholder="请输入密码">
                                    </p>
                                    <p class="clearfix">
                                        <span class="login-icon-box login-icon-lock"></span>
                                        <input type="text" class="hide" id="ie_login_tx" value="昵称">
                                        <input type="text" class="pre-momonike left" id="ie_login_nik" value="" name="nike" placeholder="请输入昵称">
                                    </p>
                                    <p class="clearfix">
                                        <input type="button" id="regist_zhibo" class="submit get-code" value="提交">
                                    </p>
                                </div>
                            </div>
                            <div class="login-info">
                                <p class="clearfix">
                                    <span class="login-icon-box login-icon-user"></span>
                                    <input type="text" class="pre-momoid left" id="user-regist-zhibo" placeholder="请输入帐号/手机号/邮箱"
                                        name="momoid">
                                    <!--<a class="right go-to-btn" href="/mm_downloads" target="_blank">立即注册</a>-->
                                    <a class="right go-to-btn" id="qrcodebtn" href="javascript:goregist(0)">立即注册</a>
                                    <input class="hide" name="momoid">
                                </p>
                                <p class="clearfix">
                                    <span class="login-icon-box login-icon-lock"></span>
                                    <input type="text" class="hide" id="ie_login_tx" value="请输入密码">
                                    <input type="password" class="pre-password left" id="ie_login_pwd_reg" value="" name="password" placeholder="请输入密码">
                                    <a class="right go-to-btn" href="https://github.com/DOUBLE-Baller" target="_blank">忘记密码</a>
                                </p>
                                <p class="clearfix msg"></p>
                                <p class="clearfix">
                                    <input type="button" id="login-in-ajax" class="submit get-code" value="登录">
                                </p>
                            </div>
                            <div class="login-form">
                                <div class="code-pre-title">
                                    <h6>首次登录需要输入验证码</h6>
                                    <p>验证码已发送至: 客户端</p>
                                </div>
                                <ul class="code-border-list">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                                <p class="code-box">
                                    <input type="text" name="code" class="codePre" maxlength="7">
                                    <span></span>
                                </p>
                                <div class="code-pre-container login-tip">
                                    <span>重新发送</span> 或者尝试
                                    <a href="https://127.0.0.1/oauth/go">短信登录</a>
                                </div>
                                <p class="codemsg"></p>
                                <p>
                                    <input type="button" class="submit submitcode" value="登录">
                                </p>
                            </div>
                        </div>
                        <div class="login-other">
                            <i>或</i>
                            <p class="cut-line login-other-title">
                                <span class="login-other-title">第三方号快速登录</span>
                            </p>
                            <a href="https://127.0.0.1/webmomo/api/login/wechat" target="_blank" class="wx-login">
                                <img src="/static/picture/weixiniconn.png">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="client-update-tip-box" data-closed="0">
            检测到客户端有新版本，请
            <a class="download-link" href="127.0.0.1" target="_blank">下载升级</a>
            <span class="ignore">忽略</span>
        </div>
        <img style="position: absolute; width: 294px; height: 280px; left: 35%; top: 400px; display: none;" id="a1img" src="/static/picture/1.gif">
        <script>
            window.momoid = undefined;
            window.ie8 = false;
            window.token = "";
            window.enMomoid = "";
        </script>
        <script type="text/javascript" src="/static/js/ckplayer.js"></script>
        <script src="/static/js/init.js"></script>
        <script src="/static/js/jquery.min.js"></script>
        <script src="/static/js/face.js"></script>
        <script src="/static/js/chat.script.js"></script>
        <script type="text/javascript">
            var flashvars = {
                p: 1,
                e: 1
            };
            var video = ['/Public//static/voices/5.mp4'];
            var support = ['all'];
            CKobject.embedHTML5('a1', 'ckplayer_a1', 244, 455, video, flashvars, support);
            //player
            /* var flashvars={
	        p:1,
			f : 'http://127.0.0.1/momo-master/Public//static/ckplayer/m3u8.swf',
	        a : 'http://192.168.208.129/hls/test.m3u8',
	        c : 0,
	        s:4,
	        lv:1//注意，如果是直播，需设置lv:1
	    };
	    var params={bgcolor:'#FFF',allowFullScreen:true,allowScriptAccess:'always',wmode:'transparent'};
	    var video=['http://192.168.208.129/hls/test.m3u8'];
	    CKobject.embed('http://127.0.0.1/momo-master/Public//static/ckplayer/ckplayer.swf','a1','ck-video','100%','100%',false, flashvars ,video, params); */
        </script>
        <script>
            $("#a1").css("z-index", 1);
            $("#a1img").css("z-index", 99999);

            //点击登录
            $(".noname-login").click(function () {
                //随机图片
                var url = "http://127.0.0.1/momo-master/Public//static/images/avatar/f1/" + Math.floor(Math.random() *
                    13 + 1) + ".jpg";
                $("#lface").attr("src", url);
                //$(".layer hide false").attr("class","layer false");
                $("#clicklogin").attr("class", "layer false");
            });

            $(".closeLayer").click(function () {
                $("#clicklogin").attr("class", "layer hide false");
            })

            //点击注册
            function goregist(num) {
                //$("#hidenregist").attr("style","border-bottom: none;");
                $("#before_login_regist").attr("class", "login-qr-code");
                $("#pre_hiden_login-info").attr("class", "login-info hide");
            }

            /* 点击注册ajax */
            $("#regist_zhibo").click(function () {
                var num1Val = document.getElementById("premomoiduserreg").value;
                var num1Va2 = document.getElementById("ie_login_pwd_regist").value;
                var num1Va3 = document.getElementById("ie_login_nik").value;
                var postdata = "user=" + num1Val + "&pass=" + num1Va2 + "&nik=" + num1Va3;
                $.ajax({
                    type: "POST",
                    url: "/Home/index/regist/",
                    data: postdata,
                    dataType: "json",
                    error: function () {
                        alert("当前操作出错！");
                    },
                    success: function (data) {
                        if (data.code == 1) {
                            alert("亲~注册成功！");
                            $("#before_login_regist").attr("class", "login-qr-code hide");
                        } else {
                            alert(data.msg);
                        }
                    }
                });
            })

            $("#login-in-ajax").click(function () {
                var num1Val = document.getElementById("user-regist-zhibo").value;
                var num1Va2 = document.getElementById("ie_login_pwd_reg").value;
                var postdata = "user=" + num1Val + "&pass=" + num1Va2;
                var face = $("#lface").attr("src");
                $.ajax({
                    type: "POST",
                    url: "/Home/index/login/",
                    data: postdata,
                    dataType: "json",
                    error: function () {
                        alert("当前操作出错！");
                    },
                    success: function (data) {
                        if (data.code == 1) {
                            chat.data.storage = window.localStorage;
                            chat.data.storage.setItem("face", $("#lface").attr("src"));
                            chat.data.storage.setItem("dologin", 1);
                            chat.data.storage.setItem("name", data.data.nik);
                            chat.data.storage.setItem("email", data.data.user);
                            window.location.reload();
                        } else {
                            alert(data.msg);
                        }
                    }
                });
            })

            //返回
            $(".close-btn").click(function () {
                $("#before_login_regist").attr("class", "login-qr-code hide");
            })
            /* 点击头像 */
            $("#header_img").click(function () {
                var a = $("#daohangimg").attr("class");
                if (a == 'account-info-box hide') {
                    $("#daohangimg").attr("class", "account-info-box");
                } else {
                    $("#daohangimg").attr("class", "account-info-box hide");
                }
            })
            /* 切换排行榜 */
            $(".tab-starCharts").click(function () {
                $(".tab-starCharts").attr("class", "on");
                $(".tab-onlineUser").attr("class", "");
                $(".fansAttraction-slide-border").attr("style", "width: 74px; left: 0px;");
            })

            $(".tab-onlineUser").click(function () {
                $(".tab-starCharts").attr("class", "");
                $(".tab-onlineUser").attr("class", "on");
                $(".fansAttraction-slide-border").attr("style", "width: 74px; left: 74px;");
                $(".tab_content starCharts current jspScrollable").attr("class",
                    "tab_content starCharts jspScrollable");
            })
            /* 上下滑动 */
            $(".jspContainer").mouseover(function () {
                $("#right-jspPane").on("mousewheel DOMMouseScroll", function (e) {
                    var delta = (e.originalEvent.wheelDelta && (e.originalEvent.wheelDelta > 0 ? 1 : -1)) || // chrome & ie
                        (e.originalEvent.detail && (e.originalEvent.detail > 0 ? -1 : 1)); // firefox
                    if (delta > 0) {
                        // 向上滚
                        var num = Math.floor($("#right-jspPane").position().top); //这是给定位的元素设置位置
                        if (num < 0) {
                            num = num + 1;
                        }
                        $("#right-jspPane").css("top", num + "px");
                    } else if (delta < 0) {
                        // 向下滚
                        var H = $("#right-jspPane").height() - 61;
                        var num = Math.floor($("#right-jspPane").position().top); //这是给定位的元素设置位置
                        if (-num < H) {
                            num = num - 1;
                            $("#right-jspPane").css("top", num + "px");
                        }
                    }
                });

                var aheight = $("#jspContainer_scol").height();
                var bhright = $("#appendillist").height() + 100;
                if (bhright > aheight) {
                    $("#jspContainer_message").on("mousewheel DOMMouseScroll", function (e) {
                        var delta = (e.originalEvent.wheelDelta && (e.originalEvent.wheelDelta > 0 ? 1 :
                                -1)) || // chrome & ie
                            (e.originalEvent.detail && (e.originalEvent.detail > 0 ? -1 : 1)); // firefox
                        var num = Math.floor($("#jspPane_message").position().top);
                        if (delta > 0) {
                            if (num > aheight) return false;
                            num = num - 2;
                            $("#jspPane_message").css("top", num + "px");
                            num1 = Math.floor($("#jspPane_message").position().top); //这是给定位的元素设置位置
                        } else {
                            if (num == 0) {
                                return false
                            }
                            //这是给定位的元素设置位置
                            num = num + 2;
                            $("#jspPane_message").css("top", num + "px");
                        }
                    })
                }
            })

            $("#lface").click(function () {
                var url = "http://127.0.0.1/momo-master/Public//static/images/avatar/f1/" + Math.floor(Math.random() *
                    13 + 1) + ".jpg";
                $("#lface").attr("src", url)
            })
            var couldRun = true;
            $(".giftIcon").click(function () {
                if (couldRun) {
                    couldRun = false;
                    // 这里放你需要的方法
                    chat.sendgift();
                    // 4秒后将变为可运行
                    setTimeout(function () {
                        couldRun = true;
                    }, 4000);
                } else {
                    console.log("过于频繁了吧兄弟,骚后再试试！");
                }
            })

            /* logout */
            $("#logout").click(function () {
                $.ajax({
                    type: "POST",
                    url: "/Home/index/logout/",
                    data: "",
                    dataType: "json",
                    error: function () {
                        alert("当前操作出错！");
                    },
                    success: function (data) {
                        if (data.code == 1) {
                            $("#daohangimg").attr("class", "account-info-box hide");
                            chat.logout();
                            window.location.reload();
                        } else {
                            alert(data.msg);
                        }
                    }
                });
            })
        </script>
        <div id="tierBox" class="box"></div>
    </body>

</html>
