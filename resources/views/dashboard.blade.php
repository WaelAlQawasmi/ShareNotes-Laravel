<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
           





                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="utf-8">
                    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
                    <!--  All snippets are MIT license http://bootdey.com/license -->
                    <title>bs4 beta user profile info with posts - Bootdey.com</title>
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
                    <link href="https://netdna.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet">
                    <script src="https://netdna.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
                </head>
                <body>
                <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
                <div class="container">
                <div class="profile-wrapper">
                    <div class="profile-section-user">
                        <div class="profile-cover-img"><img src="https://bootdey.com/img/Content/flores-amarillas-wallpaper.jpeg" alt=""></div>
                        <div class="profile-info-brief p-3"><img class="img-fluid user-profile-avatar" src="{{ Auth::user()->profile_photo_url }}" alt="">
                            <div class="text-center">
                                <h5 class="text-uppercase mb-4">  {{ Auth::user()->currentTeam->name }}</h5>
                                <p class="text-muted fz-base">I'm John Doe a web developer and software engineer. I studied computer science and software engineering.</p>
                            </div>
                        </div>
                        <!-- /.profile-info-brief -->
                        <hr class="m-0">
                        <div class="hidden-sm-down">
                            <hr class="m-0">
                            <div class="profile-info-contact p-4">
                                <h6 class="mb-3">Contact Information</h6>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td><strong>URL:</strong></td>
                                            <td>
                                                <p class="text-muted mb-0">Rathemes.com/inde.html</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>EMAIL:</strong></td>
                                            <td>
                                                <p class="text-muted mb-0">rathemes@gmail.com</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>PHONE:</strong></td>
                                            <td>
                                                <p class="text-muted mb-0">01145525755</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>SKYPE:</strong></td>
                                            <td>
                                                <p class="text-muted mb-0">Rathemes</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.profile-info-contact -->
                            <hr class="m-0">
                            <div class="profile-info-general p-4">
                                <h6 class="mb-3">General Information</h6>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td><strong>JOB:</strong></td>
                                            <td>
                                                <p class="text-muted mb-0">Web Developer</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>POSITION:</strong></td>
                                            <td>
                                                <p class="text-muted mb-0">Team Manager</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>STUDIED:</strong></td>
                                            <td>
                                                <p class="text-muted mb-0">Computer Science</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>LAST SEEN:</strong></td>
                                            <td>
                                                <p class="text-muted mb-0">Yesterday 8:00 AM</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.profile-info-general -->
                            <hr class="m-0">
                        </div>
                        <!-- /.hidden-sm-down -->
                    </div>
                    <!-- /.profile-section-user -->
                    <div class="profile-section-main">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs profile-tabs" role="tablist">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#profile-overview" role="tab">Timeline</a></li>
                        </ul>
                        <!-- /.nav-tabs -->
                        <!-- Tab panes -->
                        <div class="tab-content profile-tabs-content">
                            <div class="tab-pane active" id="profile-overview" role="tabpanel">
                                <div class="post-editor">
                                    <textarea name="post-field" id="post-field" class="post-field" placeholder="Write Something Cool!"></textarea>
                                    <div class="d-flex">
                                        <button class="btn btn-success px-4 py-1">Post</button>
                                    </div>
                                </div>
                                <!-- /.post-editor -->
                                <div class="stream-posts">
                                    <div class="stream-post">
                                        <div class="sp-author">
                                            <a href="#" class="sp-author-avatar"><img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt=""></a>
                                            <h6 class="sp-author-name"><a href="#">John Doe</a></h6></div>
                                        <div class="sp-content">
                                            <div class="sp-info">posted 1h ago</div>
                                            <p class="sp-paragraph mb-0">Auk Soldanella plainscraft acetonylidene wolfishness irrecognizant Candolleaceae provision Marsipobranchii arpen Paleoanthropus supersecular inidoneous autoplagiarism palmcrist occamy equestrianism periodontoclasia mucedin overchannel goelism decapsulation pourer zira</p>
                                        </div>
                                        <!-- /.sp-content -->
                                    </div>
                                    <!-- /.stream-post -->
                                    <div class="stream-post">
                                        <div class="sp-author">
                                            <a href="#" class="sp-author-avatar"><img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt=""></a>
                                            <h6 class="sp-author-name"><a href="#">Palmira Guthridge</a></h6></div>
                                        <div class="sp-content">
                                            <div class="sp-info">posted 1h ago</div>
                                            <p class="sp-paragraph mb-0">Auk Soldanella plainscraft acetonylidene wolfishness irrecognizant Candolleaceae provision Marsipobranchii arpen Paleoanthropus supersecular inidoneous autoplagiarism palmcrist occamy equestrianism periodontoclasia mucedin overchannel goelism decapsulation pourer zira</p>
                                        </div>
                                        <!-- /.sp-content -->
                                    </div>
                                    <!-- /.stream-post -->
                                    <div class="stream-post">
                                        <div class="sp-author">
                                            <a href="#" class="sp-author-avatar"><img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt=""></a>
                                            <h6 class="sp-author-name"><a href="#">Meghann Fraser</a></h6></div>
                                        <div class="sp-content">
                                            <div class="sp-info">posted 2h ago</div>
                                            <p class="sp-paragraph mb-0">Auk Soldanella plainscraft acetonylidene wolfishness irrecognizant Candolleaceae provision Marsipobranchii arpen Paleoanthropus supersecular inidoneous autoplagiarism palmcrist occamy equestrianism periodontoclasia mucedin overchannel goelism decapsulation pourer zira</p>
                                        </div>
                                        <!-- /.sp-content -->
                                    </div>
                                    <!-- /.stream-post -->
                                    <div class="stream-post">
                                        <div class="sp-author">
                                            <a href="#" class="sp-author-avatar"><img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt=""></a>
                                            <h6 class="sp-author-name"><a href="#">Kent Lemaitre</a></h6></div>
                                     <div class="sp-content">
                                            <div class="sp-info">posted 1h ago</div>
                                            <p class="sp-paragraph mb-0">Auk Soldanella plainscraft acetonylidene wolfishness irrecognizant Candolleaceae provision Marsipobranchii arpen Paleoanthropus supersecular inidoneous autoplagiarism palmcrist occamy equestrianism periodontoclasia mucedin overchannel goelism decapsulation pourer zira</p>
                                        </div>
                                        <!-- /.sp-content -->
                                    </div>
                                    <!-- /.stream-post -->
                                    <div class="stream-post mb-0">
                                        <div class="sp-author">
                                            <a href="#" class="sp-author-avatar"><img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt=""></a>
                                            <h6 class="sp-author-name"><a href="#">Loria Lambing</a></h6></div>
                                        <div class="sp-content">
                                            <div class="sp-info">posted 2 days ago</div>
                                            <p class="sp-paragraph">Auk Soldanella plainscraft acetonylidene wolfishness irrecognizant Candolleaceae provision Marsipobranchii arpen Paleoanthropus supersecular inidoneous</p>
                                            <p class="sp-paragraph">autoplagiarism palmcrist occamy equestrianism periodontoclasia mucedin overchannel goelism decapsulation pourer zira</p>
                                        </div>
                                        <!-- /.sp-content -->
                                    </div>
                                    <!-- /.stream-post -->
                                </div>
                                <!-- /.stream-posts -->
                            </div>
                        </div>
                        <!-- /.tab-content -->
                    </div>
                    <!-- /.profile-section-main -->
                </div>
                </div>
                
                <style type="text/css">
                .post-editor,
                .stream-post {
                    padding: .75rem;
                    background: #f7f7f9;
                    border: 1px solid #eceeef;
                    border-radius: .25rem;
                    margin-bottom: 1.5rem
                }
                
                .profile-wrapper {
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    -webkit-box-orient: vertical;
                    -webkit-box-direction: normal;
                    -ms-flex-direction: column;
                    flex-direction: column
                }
                
                @media (min-width:768px) {
                    .profile-wrapper {
                        -webkit-box-orient: horizontal;
                        -webkit-box-direction: normal;
                        -ms-flex-direction: row;
                        flex-direction: row
                    }
                }
                
                body.menubar-top .profile-wrapper {
                    border: 1px solid #eceeef
                }
                
                .profile-section-user {
                    border-right: 1px solid #eceeef;
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 100%;
                    flex: 0 0 100%
                }
                
                @media (min-width:768px) {
                    .profile-section-user {
                        -ms-flex-preferred-size: 34%;
                        flex-basis: 34%
                    }
                }
                
                @media (min-width:992px) {
                    .profile-section-user {
                        -ms-flex-preferred-size: 30%;
                        flex-basis: 30%
                    }
                }
                
                .profile-section-user table {
                    margin-bottom: 0
                }
                
                .profile-section-user table td {
                    border: none;
                    padding-left: 0;
                    padding-right: 0
                }
                
                .profile-section-user .img-gallery [class*=col] {
                    padding-right: .25rem;
                    padding-left: .25rem
                }
                
                .profile-section-user .img-gallery .row {
                    margin-right: -.25rem;
                    margin-left: -.25rem
                }
                
                .profile-section-user .img-gallery .g__item {
                    margin-bottom: .5rem
                }
                
                .profile-cover-img img {
                    width: 100%;
                    height: auto
                }
                
                .profile-info-brief {
                    position: relative;
                    padding-top: 74px!important
                }
                
                .profile-info-brief .user-profile-avatar {
                    width: 100px;
                    height: 100px;
                    border-radius: 100%;
                    position: absolute;
                    top: -50px;
                    left: calc(50% - 50px)
                }
                
                .profile-section-main {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 1 5000px;
                    flex: 0 1 5000px;
                    overflow: hidden
                }
                
                .profile-tabs {
                    padding: .75rem 1.5rem 0;
                    background: #f7f7f9;
                    border-top: 1px solid #eceeef
                }
                
                .profile-tabs .nav-link {
                    font-weight: 400;
                    padding: .75rem 1.5rem
                }
                
                .profile-tabs .nav-link.active,
                .profile-tabs .nav-link.active:focus,
                .profile-tabs .nav-link.active:hover,
                .profile-tabs .nav-link:active,
                .profile-tabs .nav-link:focus {
                    color: #60c84c
                }
                
                .profile-tabs-content .tab-pane {
                    padding: 1.5rem
                }
                
                .post-editor .post-field {
                    width: 100%;
                    height: 120px;
                    resize: vertical;
                    border-radius: .25rem;
                    margin-bottom: .5rem;
                    padding: .5rem;
                    border-color: #eceeef
                }
                
                .post-editor .post-field:focus {
                    box-shadow: none;
                    outline: none
                }
                
                .stream-post {
                    position: relative
                }
                
                .sp-author {
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex
                }
                
                .sp-author .sp-author-avatar {
                    display: inline-block;
                    height: 64px;
                    width: 64px;
                    margin-right: 16px
                }
                
                .sp-author .sp-author-avatar img {
                    width: 100%;
                    height: 100%;
                    border-radius: 50%
                }
                
                .sp-author .sp-author-name {
                    font-size: 1rem;
                    margin: .5rem 0
                }
                
                @media (min-width:992px) {
                    .sp-author {
                        position: absolute;
                        width: 100%;
                        left: 1rem;
                        top: 1rem
                    }
                    .sp-author .sp-author-name {
                        margin: 0;
                        position: absolute;
                        left: 80px;
                        top: 8px;
                        background: rgba(0, 0, 0, .9);
                        padding: .75rem 1.5rem;
                        border-radius: 6px;
                        z-index: -1;
                        opacity: 0;
                        -webkit-transform: rotate(90deg);
                        -ms-transform: rotate(90deg);
                        transform: rotate(90deg);
                        -webkit-transform-origin: left center;
                        -ms-transform-origin: left center;
                        transform-origin: left center;
                        -webkit-transition: opacity .3s, -webkit-transform .3s;
                        transition: opacity .3s, -webkit-transform .3s;
                        transition: opacity .3s, transform .3s;
                        transition: opacity .3s, transform .3s, -webkit-transform .3s
                    }
                    .sp-author .sp-author-name>a {
                        color: #fff
                    }
                    .sp-author .sp-author-avatar:hover+.sp-author-name {
                        opacity: 1;
                        z-index: 9999;
                        -webkit-transform: rotate(0);
                        -ms-transform: rotate(0);
                        transform: rotate(0)
                    }
                    .sp-author .sp-author-name:after {
                        content: "";
                        display: block;
                        position: absolute;
                        left: -8px;
                        top: 50%;
                        -webkit-transform: translateY(-50%);
                        -ms-transform: translateY(-50%);
                        transform: translateY(-50%);
                        border-top: 8px solid transparent;
                        border-bottom: 8px solid transparent;
                        border-right: 8px solid rgba(0, 0, 0, .9)
                    }
                }
                
                .sp-content {
                    position: relative;
                    border-radius: .25rem;
                    background: #fff;
                    padding: 1rem;
                    margin-top: 1rem
                }
                
                .sp-content .sp-info {
                    font-size: .875rem;
                    color: #636c72;
                    position: absolute;
                    top: -3rem;
                    left: 80px
                }
                
                .sp-content .sp-paragraph {
                    font-size: 1rem;
                    line-height: 1.6;
                    margin-bottom: 1rem
                }
                
                .sp-content .sp-paragraph:last-child {
                    margin-bottom: 0
                }
                
                .sp-content .sp-gallery img {
                    margin-right: .5rem;
                    margin-bottom: .5rem;
                    max-width: 220px;
                    max-height: 130px
                }
                
                .sp-content .sp-video {
                    width: 100%;
                    height: auto
                }
                
                @media (min-width:992px) {
                    .sp-content {
                        margin-left: 80px;
                        margin-top: 0
                    }
                    .sp-content .sp-info {
                        position: static;
                        font-style: italic;
                        margin-bottom: 1rem
                    }
                }
                
                #profile-settings textarea {
                    padding: 1rem;
                    line-height: 1.8;
                    height: 140px;
                    font-style: italic
                }
                
                #profile-settings label {
                    font-size: 1rem
                }
                
                #profile-settings .form-control {
                    color: #818a91
                }
                
                #profile-settings .form-control,
                #profile-settings .form-control:focus {
                    box-shadow: none;
                    outline: none
                }
                
                .edit-cover {
                    position: relative;
                    padding: .5rem;
                    border-radius: .25rem;
                    border: 1px solid #eceeef;
                    background: #f7f7f9;
                    height: 400px
                }
                
                .edit-cover img {
                    border-radius: .25rem;
                    width: 100%;
                    height: 100%
                }
                
                .edit-cover .btn {
                    position: absolute;
                    right: 32px;
                    bottom: 32px
                }
                </style>
                
                <script type="text/javascript">
                
                </script>
                </body>
                </html>


            </div>
        </div>
    </div>
</x-app-layout>
