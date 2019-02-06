@extends('layouts.dashboard')

@section('content')

<div class="u-body">
        <!-- End Breadcrumb -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <nav aria-label="breadcrumb">
                <h1 class="h3">Online Documentation</h1>
                <ol class="breadcrumb bg-transparent small p-0 mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Documentation</li>
                </ol>
            </nav>
        </div>
        <!-- End Breadcrumb -->
    
        <!-- Introduction -->
        <div class="card mb-3">
            <div class="card-header">
                <h2 class="h3 card-header-title">Introduction</h2>
            </div>
            <div class="card-body">
                <p>Stream Dashboard UI Kit is beautiful Open Source Bootstrap 4 UI Kit under MIT license. The UI Kit comes with 18 complete pages and includes tons reusable and customizable UI Blocks and Components. Stream UI Kit is maintained by <a href="https://htmlstream.com/">Htmlstream</a> team.</p>
    
                <p>Do not miss any updates and announcements, stay tuned on our social pages:</p>
    
                <ul class="list-inline mb-0">
                    <li class="list-inline-item mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
                        <a class="text-dark" target="_blank" href="https://www.facebook.com/htmlstream">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>
                    <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Instagram">
                        <a class="text-dark" target="_blank" href="https://www.instagram.com/htmlstream">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
                        <a class="text-dark" target="_blank" href="https://twitter.com/htmlstream">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Dribbble">
                        <a class="text-dark" target="_blank" href="https://dribbble.com/htmlstream">
                            <i class="fab fa-dribbble"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- End Introduction -->
    
        <!-- Getting Started -->
        <div class="card mb-3">
            <div class="card-header">
                <h2 class="h3 card-header-title">Getting Started</h2>
            </div>
    
            <div class="card-body">
                <p>After unziping the download package into your folder, please open a command line and follow below detailed step by step examples.</p>
    
                <p>A brief overview of the steps to your first task:</p>
    
                <ol class="mb-5">
                    <li class="mb-1">Install Node.js and Gulp</li>
                    <li class="mb-1">Install NPM modules <code>package.json</code>.</li>
                    <li class="mb-1">Run Gulp</li>
                </ol>
    
                <!-- Step 1 -->
                <div class="mb-5">
                    <div class="media align-self-center mb-3">
                        <span class="badge badge-primary badge-pill mr-2">1</span>
                        <div class="media-body">
                            <h4 class="h3 mb-0">Install Node.js and Gulp</h4>
                        </div>
                    </div>
    
                    <div class="mb-4">
                        <h5 class="font-weight-bold">Installing Node.js</h5>
                        <p>If you do not have Node installed already, you can get it by <a target="_blank" href="https://nodejs.org/en/">downloading the package installer from Node's website <small class="fa fa-external-link-alt ml-1"></small></a>. Please download the stable version of Node.js (LTS) NOT the latest.</p>
                    </div>
    
                    <h5 class="font-weight-bold">Installing Gulp</h5>
                    <p>You need to have Node.js (Node) installed onto your computer before you can install Gulp. When you're done with installing Node, you can install Gulp by using the following command in the command line:</p>
    
                    <p>Please note, first Gulp should be installed globally and for that reason <code>-g</code> command is used.</p>
                    <div class="code-toolbar"><pre class="mb-4  language-js"><code class="  language-js" data-lang="js">npm install gulp<span class="token operator">-</span>cli <span class="token operator">-</span>g</code></pre>
                        <div class="toolbar">
                            <div class="toolbar-item"><a>Copy</a></div>
                        </div>
                    </div>
    
                    <div class="docs-alert docs-alert--danger rounded" role="alert">
                        <h5 class="text-danger">Important!</h5>
                        <p class="mb-0">Note: If you are using MacOS please use <code>sudo</code> keyword in the command because they need administrator rights to install Gulp globally.</p>
                    </div>
                </div>
                <!-- End Step 1 -->
    
                <!-- Step 2 -->
                <div class="mb-4">
                    <div class="media mb-3">
                        <span class="badge badge-primary badge-pill align-self-center mr-2">2</span>
                        <div class="media-body">
                            <h4 class="h3 mb-0">Install NPM modules <code>package.json</code></h4>
                        </div>
                    </div>
    
                    <div class="mb-4">
                        <h5 class="font-weight-bold">Installing NPM modules</h5>
                        <p>First, change the command line path into your project folder. if you have not done this before, you may check the following article to quick start <a target="_blank" href="http://www.digitalcitizen.life/command-prompt-how-use-basic-commands">http://www.digitalcitizen.life/command-prompt-how-use-basic-commands <small class="fa fa-external-link-alt ml-1"></small></a></p>
                    </div>
    
                    <p>Once the path of your workflow is changed to Unify folder, you may run <code>package.json</code> file by using the following command:</p>
    
                    <div class="code-toolbar"><pre class="mb-4  language-js"><code class="  language-js" data-lang="js">npm install</code></pre>
                        <div class="toolbar">
                            <div class="toolbar-item"><a>Copy</a></div>
                        </div>
                    </div>
    
                    <p>This time, we're installing <code>Gulp</code> with its all dependency plugins like <code>gulp-sass</code> and others. It might take a few minutes, depends on your internet connection.</p>
                </div>
                <!-- End Step 2 -->
    
                <!-- Step 3 -->
                <div>
                    <div class="media mb-3">
                        <span class="badge badge-primary badge-pill align-self-center mr-2">3</span>
                        <div class="media-body">
                            <h4 class="h5 mb-0">Run Gulp</h4>
                        </div>
                    </div>
    
                    <p>Now we have an integrated workflow, try it out run:</p>
    
                    <div class="code-toolbar"><pre class="mb-4  language-js"><code class="  language-js" data-lang="js">gulp</code></pre>
                        <div class="toolbar">
                            <div class="toolbar-item"><a>Copy</a></div>
                        </div>
                    </div>
    
                    <p>Now you can try making some changes to <code>_user.scss</code> or <code>_user-variables.scss</code> in the SASS folder and save it.</p>
    
                    <div class="docs-alert docs-alert--info rounded" role="alert">
                        <h5 class="text-info">Info!</h5>
                        <p class="mb-0">The SASS files are placed udner the following path: <code>assets/include/scss/..</code></p>
                    </div>
                </div>
                <!-- End Step 3 -->
            </div>
        </div>
        <!-- Getting Started -->
    
        <!-- Changelog -->
        <div class="card mb-3">
            <div class="card-header">
                <h2 class="h3 card-header-title">Changelog</h2>
            </div>
            <div class="card-body">
                <p>Please do not forget to backup your files before the upgrade.</p>
    
                <h4 class="h5 font-weight-bold">Version 1.0 – 10 December 2018</h4>
    
                <ul class="mb-4">
                    <li>Initial Release</li>
                </ul>
    
                <p>If you would like to get notified about important updates, you may star and watch the repository on <a class="mx-1" href="https://github.com/htmlstreamofficial/stream-dashboard-ui-kit" target="_blank"><i class="fab fa-github"></i> GitHub</a> and follow us on our social pages:</p>
    
                <ul class="list-inline mb-0">
                    <li class="list-inline-item mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
                        <a class="text-dark" target="_blank" href="https://www.facebook.com/htmlstream">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>
                    <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Instagram">
                        <a class="text-dark" target="_blank" href="https://www.instagram.com/htmlstream">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
                        <a class="text-dark" target="_blank" href="https://twitter.com/htmlstream">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Dribbble">
                        <a class="text-dark" target="_blank" href="https://dribbble.com/htmlstream">
                            <i class="fab fa-dribbble"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- End Changelog -->
    
        <!-- Credits -->
        <div class="card">
            <div class="card-header">
                <h2 class="h3 card-header-title">Credits</h2>
            </div>
            <div class="card-body">
                <p class="mb-4">First, let us take this opportunity to thank all the creative minds for their great products and hard work. All used third party libraries are located in <code>assets/vendor/..</code> and image sources in <code>assets/img-temp/..</code></p>
    
                <div class="mb-4">
                    <h4 class="h5">Libraries</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>License</th>
                                    <th>URL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Bootstrap</td>
                                    <td>MIT</td>
                                    <td><a target="_blank" href="https://getbootstrap.com">https://getbootstrap.com</a></td>
                                </tr>
                                <tr>
                                    <td>Popper.js</td>
                                    <td>MIT</td>
                                    <td><a target="_blank" href="https://popper.js.org/">https://popper.js.org</a></td>
                                </tr>
                                <tr>
                                    <td>jQuery</td>
                                    <td>MIT</td>
                                    <td><a target="_blank" href="http://jquery.com">http://jquery.com</a></td>
                                </tr>
                                <tr>
                                    <td>Font Awesome</td>
                                    <td>CC BY 4.0</td>
                                    <td><a target="_blank" href="https://fontawesome.com/">https://fontawesome.com</a></td>
                                </tr>
                                <tr>
                                    <td>Chart.js</td>
                                    <td>MIT</td>
                                    <td><a target="_blank" href="https://www.chartjs.org/">https://www.chartjs.org</a></td>
                                </tr>
                                <tr>
                                    <td>Malihu Custom Scrollbar</td>
                                    <td>MIT</td>
                                    <td><a target="_blank" href="https://github.com/malihu/malihu-custom-scrollbar-plugin/">https://github.com/malihu/malihu-custom-scrollbar-plugin</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
    
                <h4 class="font-weight-bold">Fonts &amp; Images</h4>
                <ul class="mb-0">
                    <li class="mb-1">Google Fonts: <a target="_blank" href="http://www.google.com/fonts">http://www.google.com/fonts</a></li>
                    <li>Unsplash Beautiful free photos: <a target="_blank" href="http://unsplash.com">http://unsplash.com</a></li>
                </ul>
            </div>
        </div>
        <!-- End Credits -->
    </div>
@endsection