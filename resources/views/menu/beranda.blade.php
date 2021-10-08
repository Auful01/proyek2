@extends('layouts.admin.main')

@section('content')
    <div class="col-sm-12 set-height set-padding">
      <div id="section1">
        <div class="card">
          <div class="card-body">
            <h4 class="mb-4">Introduction</h4>
            <p>
              Poco Admin is a responsive HTML template that is based on the CSS framework Bootstrap 4 and it is built with Sass, Gulp and Pug. Sass compiler makes it easier to code and customize. If you are unfamiliar with Bootstrap or Gulp, visit their website and read through the documentation. All of Bootstrap components have been modified to fit the style of Poco Admin and provide a consistent look throughout the
              template.
            </p>
            <p>Before you start working with the template, we suggest you go through the pages that are bundled with the theme. Most of the template example pages contain quick tips on how to create or use a component which can be really helpful when you need to create something on the fly.</p>
          </div>
        </div>
      </div>
      <div id="section2">
        <div class="card">
          <div class="card-body">
            <h4 class="mb-4">Getting started</h4>
            <p>
              You can directly use the compiled and ready-to-use the version of the template. But in
              case you plan to customize the template extensively the template allows you to do
              so.
            </p>
            <p>
              Within the download you'll find the following directories and files, logically grouping
              common assets and providing both compiled and minified variations:
            </p>
            <div class="card-body tree-color">
              <div id="basicTree">
                <ul>
                  <li>Poco Admin
                    <ul>
                      <li data-jstree="{&quot;opened&quot;:true}">Assets
                        <ul>
                          <li data-jstree="{&quot;opened&quot;:true}">Ajax</li>
                          <li data-jstree="{&quot;opened&quot;:true}">Css</li>
                          <li data-jstree="{&quot;opened&quot;:true}">Fonts</li>
                          <li data-jstree="{&quot;opened&quot;:true}">Images</li>
                          <li data-jstree="{&quot;opened&quot;:true}">Js</li>
                          <li data-jstree="{&quot;opened&quot;:true}">Json</li>
                          <li data-jstree="{&quot;opened&quot;:true}">Scss</li>
                          <li data-jstree="{&quot;opened&quot;:true}">Video</li>
                        </ul>
                      </li>
                      <li data-jstree="{&quot;opened&quot;:true}">Boxes</li>
                      <li data-jstree="{&quot;opened&quot;:true}">Dark</li>
                      <li data-jstree="{&quot;opened&quot;:true}">Default</li>
                      <li data-jstree="{&quot;opened&quot;:true}">Document</li>
                      <li data-jstree="{&quot;opened&quot;:true}">Extra</li>
                      <li data-jstree="{&quot;opened&quot;:true}">RTL</li>
                      <li data-jstree="{&quot;opened&quot;:true}">Starter-kit</li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <p class="mt-1">
              Note: The root folder denoted further in this documentation refers to the
              'template' folder inside the downloaded folder
            </p>
            <hr class="mt-4">
            <h5 class="mt-4">Template Installation</h5>
            <h6 class="mt-4">FTP Upload:</h6>
            <p class="m-b-0">Open up your FTP manager and connect to your hosting</p>
            <p class="m-b-0">Browse to required directory (Normally public_html)</p>
            <p class="m-b-0">
              Upload the files inside strong Main
               folder.
            </p>
          </div>
        </div>
      </div>
      <div id="section3">
        <div class="card">
          <div class="card-body">
            <h4 class="my-4">Options</h4>
            <hr class="hr">
            <h5 class="my-4">Layouts</h5>
            <p>
              We have provided a bunch of page layouts and menu layouts that can be implemented with
              just a options change to body! Please refer the below table for corresponding
              classes.
            </p>
            <table class="table">
              <thead>
                <tr>
                  <th>Layout</th>
                  <th>Options</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Boxed Layout</td>
                  <td>Class:<br>box-layout</td>
                </tr>
                <tr>
                  <td>RTL Layout</td>
                  <td>Class:<br>rtl</td>
                </tr>
                <tr>
                  <td>Light layout</td>
                  <td>-</td>
                </tr>
                <tr>
                  <td>Dark Sidebar</td>
                  <td>Class:<br>dark-only</td>
                </tr>
                <tr>
                  <td>Dark Layout</td>
                  <td>Class:<br>sidebar-dark</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div id="section4">
        <div class="card">
          <div class="card-body">
            <h4 class="my-4">Components</h4>
            <hr class="hr">
            <div id="section41">
              <h5 class="my-4">Basic UI Elements</h5>
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Button" role="tab" aria-selected="true" data-original-title="" title="">Button</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tag-pills" role="tab" aria-selected="false" data-original-title="" title="">Tag & pills</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#progress-bar" role="tab" aria-selected="false" data-original-title="" title="">progress bar</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#alert" role="tab" aria-selected="false" data-original-title="" title="">Alert</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#popover" role="tab" aria-selected="false" data-original-title="" title="">popover</a></li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="Button" role="tabpanel">
                  <div class="fluid-container py-4">
                    <button class="btn btn-primary" type="button" data-original-title="" title="">Primary</button>
                    <button class="btn btn-secondary" type="button" data-original-title="" title="">Secondary</button>
                    <button class="btn btn-success" type="button" data-original-title="" title="">Success</button>
                    <button class="btn btn-info" type="button" data-original-title="" title="">Info</button>
                    <button class="btn btn-warning" type="button" data-original-title="" title="">Warning</button>
                    <button class="btn btn-danger" type="button" data-original-title="" title="">Danger</button>
                  </div>
                  <div class="card-body html-editor">&lt;button type="button" class="btn btn-primary"&gt;Primary Button&lt;/button&gt;<br>&lt;button type="button" class="btn btn-secondary"&gt;Secondary Button&lt;/button&gt;<br>&lt;button type="button" class="btn btn-success"&gt;Success Button&lt;/button&gt;<br>&lt;button type="button" class="btn btn-info"&gt;Info Button&lt;/button&gt;<br>&lt;button type="button" class="btn btn-warning"&gt;Warning Button&lt;/button&gt;<br>&lt;button type="button" class="btn btn-danger"&gt;Danger Button&lt;/button&gt;<br>&lt;button type="button" class="btn btn-light"&gt;Light Button&lt;/button&gt;</div>
                  <p class="m-t-25">
                    To use another types button you have to link the related css
                    file according to types of buttons in a head tag
                  </p>
                </div>
                <div class="tab-pane fade" id="tag-pills" role="tabpanel">
                  <div class="fluid-container py-4"><span class="badge badge-primary">Primary</span><span class="badge badge-secondary">Secondary</span><span class="badge badge-success">Success</span><span class="badge badge-info">Info</span><span class="badge badge-warning">Warning</span><span class="badge badge-danger">Danger</span><span class="badge badge-light">Light</span><span class="badge badge-dark tag-pills-sm-mb">Dark</span></div>
                  <div class="card-body html-editor">&lt;span class="badge badge-primary"&gt;Primary&lt;/span&gt;<br>&lt;span class="badge badge-secondary"&gt;Secondary&lt;/span&gt;<br>&lt;span class="badge badge-success"&gt;Success&lt;/span&gt;<br>&lt;span class="badge badge-info"&gt;Info&lt;/span&gt;<br>&lt;span class="badge badge-warning"&gt;Warning&lt;/span&gt;<br>&lt;span class="badge badge-danger"&gt;Danger&lt;/span&gt;<br>&lt;span class="badge badge-light"&gt;Light&lt;/span&gt;<br>&lt;span class="badge badge-dark tag-pills-sm-mb"&gt;Dark&lt;/span&gt;</div>
                </div>
                <div class="tab-pane fade" id="progress-bar" role="tabpanel">
                  <div class="fluid-container py-4">
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress">
                      <div class="progress-bar bg-secondary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress">
                      <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress">
                      <div class="progress-bar bg-info" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="card-body html-editor">&lt;div class="progress"&gt;<br>&lt;div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"&gt;<br>&lt;/div&gt;<br>&lt;div class="progress"&gt;<br>&lt;div class="progress-bar bg-primary" role="progressbar" style="width: 25%"           aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;<br>&lt;/div&gt;<br>&lt;div class="progress"&gt;<br>&lt;div class="progress-bar bg-secondary" role="progressbar" style="width: 50%"         aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"&gt;<br>&lt;/div&gt;<br>&lt;div class="progress"&gt;<br>&lt;div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"&gt;<br>&lt;/div&gt;<br>&lt;div class="progress"&gt;<br>&lt;div class="progress-bar bg-info" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"&gt;<br>&lt;/div&gt;</div>
                </div>
                <div class="tab-pane fade" id="alert" role="tabpanel">
                  <div class="fluid-container py-4">
                    <div class="alert alert-primary dark" role="alert">This is a info alert—check it out!</div>
                    <div class="alert alert-secondary dark" role="alert">This is a light alert—check it out!</div>
                    <div class="alert alert-success dark" role="alert">This is a success alert—check it out!</div>
                    <div class="alert alert-info dark" role="alert">This is a danger alert—check it out!</div>
                    <div class="alert alert-warning dark" role="alert">This is a secondary alert—check it out!</div>
                    <div class="alert alert-danger dark" role="alert">This is a warning alert—check it out!</div>
                    <div class="alert alert-light dark" role="alert">This is a dark alert—check it out!</div>
                    <div class="alert alert-dark dark" role="alert">This is a dark alert—check it out!</div>
                  </div>
                  <div class="card-body html-editor">&lt;div class="alert alert-primary dark" role="alert"&gt;This is a info alert—check it out!&lt;/div&gt;<br>&lt;div class="alert alert-secondary dark" role="alert"&gt;This is a light alert—check it out!&lt;/div&gt;<br>&lt;div class="alert alert-success dark" role="alert"&gt;This is a success alert—check it out!&lt;/div&gt;<br>&lt;div class="alert alert-info dark" role="alert"&gt;This is a danger alert—check it out!&lt;/div&gt;<br>&lt;div class="alert alert-warning dark" role="alert"&gt;This is a secondary alert—check it out!&lt;/div&gt;<br>&lt;div class="alert alert-danger dark" role="alert"&gt;This is a warning alert—check it out!&lt;/div&gt;<br>&lt;div class="alert alert-light dark" role="alert"&gt;This is a dark alert—check it out!&lt;/div&gt;<br>&lt;div class="alert alert-dark dark" role="alert"&gt;This is a dark alert—check it out!&lt;/div&gt;</div>
                </div>
                <div class="tab-pane fade" id="popover" role="tabpanel">
                  <div class="fluid-container py-4">
                    <button class="btn btn-primary example-popover mr-1" type="button" data-toggle="popover" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="Popover title">Click to toggle popover</button><a class="example-popover btn btn-secondary" tabindex="0" role="button" data-toggle="popover" data-trigger="focus" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="Popover title">
                      Dismissible
                      popover</a>
                    <button class="example-popover btn btn-success" type="button" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="bottom" title="" data-offset="-20px -20px" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover title">On Hover Tooltip</button>
                  </div>
                  <div class="card-body html-editor">&lt;button type="button" class="btn btn-primary example-popover mr-1" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?"&gt;Click to toggle popover&lt;/button&gt;<br>&lt;a tabindex="0" class="example-popover btn btn-secondary" role="button" data-toggle="popover" data-trigger="focus" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?"&gt;Dismissible                                              popover&lt;/a&gt;<br>&lt;button type="button" data-trigger="hover" class="example-popover btn btn-success" data-container="body" data-toggle="popover" data-placement="bottom" title="Popover title" data-offset="-20px -20px" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." &gt;On Hover Tooltip&lt;/button&gt;</div>
                  <h6 class="p-t-20 p-b-20">To use java script you have to add the following script tag</h6>
                  <div class="card-body html-editor">&lt;!--popover js--&gt;<br>&lt;script src="../assets/js/popover-custom.js"&gt;&lt;/script&gt;</div>
                </div>
              </div>
              <ul class="nav nav-tabs m-t-25" id="myTab2" role="tablist">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#tooltip" role="tab" aria-selected="false" data-original-title="" title="">Tooltip</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#dropdown" role="tab" aria-selected="true" data-original-title="" title="">Dropdown</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tabs" role="tab" aria-selected="false" data-original-title="" title="">Tabs</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#according" role="tab" aria-selected="false" data-original-title="" title="">According</a></li>
              </ul>
              <div class="tab-content" id="myTabContent2">
                <div class="tab-pane fade show active" id="tooltip" role="tabpanel">
                  <div class="fluid-container py-4">
                    <button class="example-popover btn btn-primary" type="button" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Popover title">Hover Me</button>
                  </div>
                  <div class="card-body html-editor">&lt;button type="button" class="example-popover btn btn-primary" data-container="body" data-toggle="popover" data-placement="top" title="Popover title" &gt;Hover Me&lt;/button&gt;</div>
                  <h6 class="p-t-20 p-b-20">To use java script you have to add the following script tag</h6>
                  <div class="card-body html-editor">&lt;!--tooltip js--&gt;<br>&lt;script src="../assets/js/tooltip-init.js"&gt;&lt;/script&gt;</div>
                </div>
                <div class="tab-pane fade" id="dropdown" role="tabpanel">
                  <div class="fluid-container py-4">
                    <div class="dropdown-basic">
                      <div class="dropdown">
                        <button class="dropbtn btn-primary" type="button" data-original-title="" title="">
                          Dropdown
                          Button<span><i class="icofont icofont-arrow-down"></i></span>
                        </button>
                        <div class="dropdown-content"><a href="#" data-original-title="" title="">Action</a><a href="#" data-original-title="" title="">Another Action</a><a href="#" data-original-title="" title="">Something Else Here</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body html-editor">&lt;div class="dropdown-basic"&gt;<br>&lt;div class="dropdown"&gt;<br>&lt;button type="button" class="dropbtn btn-primary"&gt;Dropdown Button &lt;span&gt;&lt;i class="icofont icofont-arrow-down"&gt;&lt;/i&gt;&lt;/span&gt;&lt;/button&gt;<br>&lt;div class="dropdown-content"&gt;<br>&lt;a href="#"&gt;Action&lt;/a&gt;<br>&lt;a href="#"&gt;Another Action&lt;/a&gt;<br>&lt;a href="#"&gt;Something Else Here&lt;/a&gt;<br>&lt;/div&gt;<br>&lt;/div&gt;<br>&lt;/div&gt;</div>
                </div>
                <div class="tab-pane fade" id="tabs" role="tabpanel">
                  <div class="fluid-container py-4">
                    <ul class="nav nav-tabs" id="myTab3" role="tablist">
                      <li class="nav-item"><a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" data-original-title="" title="">                                        </a></li>
                      <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" data-original-title="" title="">Dropdown</a>
                        <div class="dropdown-menu"><a class="dropdown-item" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" data-original-title="" title="">Action</a><a class="dropdown-item" href="#" data-original-title="" title="">Another action</a><a class="dropdown-item" href="#" data-original-title="" title="">Something else here</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item" href="#" data-original-title="" title="">Separated link</a>
                        </div>
                      </li>
                      <li class="nav-item"><a class="nav-link" id="profile-tabs" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" data-original-title="" title="">Profile</a></li>
                      <li class="nav-item"><a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false" data-original-title="" title="">Contact</a></li>
                    </ul>
                    <div class="tab-content" id="myTabContent3">
                      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <p class="mb-0 m-t-30">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                      </div>
                      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <p class="mb-0 m-t-30">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                      </div>
                      <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <p class="mb-0 m-t-30">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                      </div>
                    </div>
                  </div>
                  <div class="card-body html-editor">&lt;ul class="nav nav-tabs" id="myTab3" role="tablist"&gt;<br>&lt;li class="nav-item"&gt;<br>&lt;a class="nav-link active" id="home-tab"         data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"&gt;Home&lt;/a&gt;<br>&lt;/li&gt;<br><br>&lt;li class="nav-item dropdown"&gt;<br>&lt;a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"&gt;Dropdown&lt;/a&gt;<br>&lt;div class="dropdown-menu"&gt;<br>&lt;a class="dropdown-item" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"&gt;Action&lt;/a&gt;<br>&lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;<br>&lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;<br>&lt;div class="dropdown-divider"&gt;&lt;/div&gt;<br>&lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;<br>&lt;/div&gt;<br>&lt;/li&gt;<br><br>&lt;li class="nav-item"&gt;<br>&lt;a class="nav-link" id="profile-tabs" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"&gt;Profile&lt;/a&gt;<br>&lt;/li&gt;<br>&lt;li class="nav-item"&gt;<br>&lt;a class="nav-link" id="contact-tab"           data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"&gt;Contact&lt;/a&gt;<br>&lt;/li&gt;<br>&lt;/ul&gt;<br>&lt;div class="tab-content" id="myTabContent3"&gt;<br>&lt;div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"&gt;<br>&lt;p class="mb-0 m-t-30"&gt;<br>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum<br>&lt;/p&gt;<br>&lt;/div&gt;<br>&lt;div class="tab-pane fade" id="profile"        role="tabpanel" aria-labelledby="profile-tab"&gt;<br>&lt;p class="mb-0 m-t-30"&gt;<br>...<br>&lt;/p&gt;<br>&lt;/div&gt;<br>&lt;div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"&gt;<br>&lt;p class="mb-0 m-t-30"&gt;<br>...<br>&lt;/p&gt;<br>&lt;/div&gt;<br>&lt;/div&gt;</div>
                </div>
                <div class="tab-pane fade" id="according" role="tabpanel">
                  <div class="fluid-container py-4">
                    <div class="default-according" id="accordion">
                      <div class="card">
                        <div class="card-header" id="headingOne">
                          <h6 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" data-original-title="" title="">Collapsible Group Item #<span class="digits">1</span></button>
                          </h6>
                        </div>
                        <div class="collapse show" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordion">
                          <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingTwo">
                          <h6 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" data-original-title="" title="">Collapsible Group Item #<span class="digits">2</span></button>
                          </h6>
                        </div>
                        <div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordion">
                          <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingThree">
                          <h6 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" data-original-title="" title="">Collapsible Group Item #<span class="digits">3</span></button>
                          </h6>
                        </div>
                        <div class="collapse" id="collapseThree" aria-labelledby="headingThree" data-parent="#accordion">
                          <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body html-editor">&lt;div id="accordion" class="default-according"&gt;<br>&lt;div class="card"&gt;<br>&lt;div class="card-header" id="headingOne"&gt;<br>&lt;h5 class="mb-0"&gt;<br>&lt;button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"      aria-controls="collapseOne"&gt;<br>Collapsible Group Item #
                    &lt;span class="digits"&gt;1&lt;/span&gt;<br>&lt;/button&gt;<br>&lt;/h5&gt;<br>&lt;/div&gt;<br>&lt;div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion"&gt;<br>&lt;div class="card-body"&gt;<br>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.<br>&lt;/div&gt;<br>&lt;/div&gt;<br>&lt;/div&gt;<br>&lt;div class="card"&gt;<br>...<br>&lt;/div&gt;<br>&lt;div class="card"&gt;<br>...<br>&lt;/div&gt;<br>&lt;/div&gt;
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="section42">
            <div class="card-body">
              <hr class="hr">
              <h5 class="my-4">Advance UI Elements</h5>
              <ul class="nav nav-tabs" id="myTab4" role="tablist">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#scrollable" role="tab" aria-selected="true" data-original-title="" title="">Scrollable</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tree" role="tab" aria-selected="false" data-original-title="" title="">Tree</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#notify" role="tab" aria-selected="false" data-original-title="" title="">Notify</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#rating" role="tab" aria-selected="false" data-original-title="" title="">rating</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#dropzone" role="tab" aria-selected="false" data-original-title="" title="">dropzone</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tour" role="tab" aria-selected="true" data-original-title="" title="">Tour</a></li>
              </ul>
              <div class="tab-content" id="myTabContent4">
                <div class="tab-pane fade show active" id="scrollable" role="tabpanel">
                  <h6 class="p-t-20 p-b-20">
                    To use java script you have to add the following style
                    and script tag
                  </h6>
                  <div class="card-body html-editor">&lt;!--Scrollable css--&gt;<br>&lt;link rel="stylesheet" type="text/css" href="../assets/css/scrollable.css"&gt;<br><br>&lt;!--scrollable js--&gt;<br>&lt;script src="../assets/js/scrollable/scrollable-custom.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/scrollable/perfect-scrollbar.min.js" &gt;&lt;/script&gt;</div>
                </div>
                <div class="tab-pane fade" id="tree" role="tabpanel">
                  <h6 class="p-t-20 p-b-20">
                    To use java script you have to add the following style
                    and script tag
                  </h6>
                  <div class="card-body html-editor">&lt;!-- Tree css --&gt;<br>&lt;link rel="stylesheet" type="text/css" href="../assets/css/tree.css"&gt;<br><br>&lt;!-- Tree js--&gt;<br>&lt;script src="../assets/js/tree/jstree.min.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/tree/tree.js" &gt;&lt;/script&gt;</div>
                </div>
                <div class="tab-pane fade" id="notify" role="tabpanel">
                  <h6 class="p-t-20 p-b-20">
                    To use java script you have to add the following
                    script tag
                  </h6>
                  <div class="card-body html-editor">&lt;!-- bootstrap notify js --&gt;<br>&lt;script src="../assets/js/notify/bootstrap-notify.min.js" &gt;&lt;/script&gt;<br>&lt;script src="../assets/js/notify/notify-script.js" &gt;&lt;/script&gt;</div>
                </div>
                <div class="tab-pane fade" id="rating" role="tabpanel">
                  <h6 class="p-t-20 p-b-20">
                    To use java script you have to add the following style
                    and script tag
                  </h6>
                  <div class="card-body html-editor">&lt;!-- range slider css start here --&gt;<br>&lt;link rel="stylesheet" type="text/css" href="../assets/css/rating.css"&gt;<br><br>&lt;!-- Ion Range Slider js --&gt;<br>&lt;script src="../assets/js/rating/jquery.barrating.js" &gt;&lt;/script&gt;<br>&lt;script src="../assets/js/rating/rating-script.js" &gt;&lt;/script&gt;</div>
                </div>
                <div class="tab-pane fade" id="dropzone" role="tabpanel">
                  <h6 class="p-t-20 p-b-20">
                    To use java script you have to add the following style
                    and script tag
                  </h6>
                  <div class="card-body html-editor">&lt;!-- Dropzone start here --&gt;<br>&lt;link rel="stylesheet" type="text/css" href="../assets/css/dropzone.css"&gt;<br><br>&lt;!-- Dropzone js --&gt;<br>&lt;script src="../assets/js/dropzone/dropzone.js" &gt;&lt;/script&gt;<br>&lt;script src="../assets/js/dropzone/dropzone-script.js" &gt;&lt;/script&gt;</div>
                </div>
                <div class="tab-pane fade" id="tour" role="tabpanel">
                  <h6 class="p-t-20 p-b-20">
                    To use java script you have to add the following style
                    and script tag
                  </h6>
                  <div class="card-body html-editor">&lt;!-- tour js --&gt;<br>&lt;script src="../assets/js/tour/intro.js" &gt;&lt;/script&gt;<br>&lt;script src="../assets/js/tour/intro-init.js" &gt;&lt;/script&gt;</div>
                </div>
              </div>
              <ul class="nav nav-tabs m-t-35" id="myTab5" role="tablist">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#sweet-alert" role="tab" aria-selected="false" data-original-title="" title="">sweet alert</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#demo-animated" role="tab" aria-selected="false" data-original-title="" title="">Animated modal</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#owl-carousel" role="tab" aria-selected="false" data-original-title="" title="">owl carousel</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#range-slider" role="tab" aria-selected="false" data-original-title="" title="">Range slider</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#image-cropper" role="tab" aria-selected="false" data-original-title="" title="">Image cropper</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#sticky" role="tab" aria-selected="false" data-original-title="" title="">Sticky</a></li>
              </ul>
              <div class="tab-content" id="myTabContent5">
                <div class="tab-pane fade show active" id="sweet-alert" role="tabpanel">
                  <h6 class="p-t-20 p-b-20">
                    To use java script you have to add the following style
                    and script tag
                  </h6>
                  <div class="card-body html-editor">&lt;!-- Sweet alert jquery--&gt;<br>&lt;script src="../assets/js/sweet-alert/sweetalert.min.js" &gt;&lt;/script&gt;<br>&lt;script src="../assets/js/sweet-alert/app.js" &gt;&lt;/script&gt;<br></div>
                </div>
                <div class="tab-pane fade" id="demo-animated" role="tabpanel">
                  <h6 class="p-t-20 p-b-20">
                    To use java script you have to add the following css
                    and script tag
                  </h6>
                  <div class="card-body html-editor">&lt;!-- animate css --&gt;<br>&lt;link rel="stylesheet" type="text/css" href="../assets/css/animate.css"&gt;<br><br>&lt;!-- Modal js--&gt;<br>&lt;script src="../assets/js/modal-animated.js"&gt;&lt;/script&gt;</div>
                </div>
                <div class="tab-pane fade" id="owl-carousel" role="tabpanel">
                  <h6 class="p-t-20 p-b-20">
                    To use java script you have to add the following style
                    and script tag
                  </h6>
                  <div class="card-body html-editor">&lt;!-- Owl css --&gt;<br>&lt;link rel="stylesheet" type="text/css" href="../assets/css/owlcarousel.css"&gt;<br><br>&lt;!-- owlcarousel js--&gt;<br>&lt;script src="../assets/js/owlcarousel/owl.carousel.js" &lt;&lt;/script&gt;</div>
                </div>
                <div class="tab-pane fade" id="range-slider" role="tabpanel">
                  <h6 class="p-t-20 p-b-20">
                    To use java script you have to add the following style
                    and script tag
                  </h6>
                  <div class="card-body html-editor">&lt;!-- range slider css start here --&gt;<br>&lt;link rel="stylesheet" type="text/css" href="../assets/css/range-slider.css"&gt;<br><br>&lt;!-- Ion Range Slider js --&gt;<br>&lt;script src="../assets/js/range-slider/ion.rangeSlider.min.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/range-slider/rangeslider-script.js" &gt;&lt;/script&gt;</div>
                </div>
                <div class="tab-pane fade" id="image-cropper" role="tabpanel">
                  <h6 class="p-t-20 p-b-20">
                    To use java script you have to add the following style
                    and script tag
                  </h6>
                  <div class="card-body html-editor">&lt;!--Image cropper css--&gt;<br>&lt;link rel="stylesheet" type="text/css" href="../assets/css/image-cropper.css"&gt;<br><br>&lt;!--Cropper jquery--&gt;<br>&lt;script src="../assets/js/image-cropper/cropper.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/image-cropper/cropper-main.js"&gt;&lt;/script&gt;</div>
                </div>
                <div class="tab-pane fade" id="sticky" role="tabpanel">
                  <h6 class="p-t-20 p-b-20">
                    To use java script you have to add the following style
                    and script tag
                  </h6>
                  <div class="card-body html-editor">&lt;!-- sticky css --&gt;<br>&lt;link rel="stylesheet" type="text/css" href="../assets/css/sticky.css"&gt;<br><br>&lt;!--Sticky note js--&gt;<br>&lt;script src='../assets/js/sticky/sticky.js'&gt;&lt;/script&gt;</div>
                </div>
              </div>
            </div>
          </div>
          <div id="section43">
            <div class="card-body">
              <hr class="hr">
              <h5 class="my-4">Animations</h5>
              <ul class="nav nav-tabs" id="myTab6" role="tablist">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#animate" role="tab" aria-selected="true" data-original-title="" title="">Animate</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#scroll-reveal" role="tab" aria-selected="false" data-original-title="" title="">scroll reveal</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#aos" role="tab" aria-selected="false" data-original-title="" title="">AOS</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tilt" role="tab" aria-selected="false" data-original-title="" title="">Tilt</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#wow" role="tab" aria-selected="true" data-original-title="" title="">Wow</a></li>
              </ul>
              <div class="tab-content" id="myTabContent6">
                <div class="tab-pane fade show active" id="animate" role="tabpanel">
                  <h6 class="p-t-20 p-b-20">
                    To use java script you have to add the following style
                    and script tag
                  </h6>
                  <div class="card-body html-editor">&lt;!-- animate custom js --&gt;<br>&lt;script src="../assets/js/animate-custom.js" &gt;&lt;/script&gt;<br><br>&lt;!-- Animate icon --&gt;<br>&lt;link rel="stylesheet" href="../assets/css/animate.css"&gt;</div>
                </div>
                <div class="tab-pane fade" id="scroll-reveal" role="tabpanel">
                  <h6 class="p-t-20 p-b-20">To use java script you have to add the following script tag</h6>
                  <div class="card-body html-editor">&lt;!-- Scroll Reveal jquery--&gt;<br>&lt;script src="../assets/js/scroll-reveal/scrollreveal.min.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/modernizr.js" &gt;&lt;/script&gt;</div>
                </div>
                <div class="tab-pane fade" id="aos" role="tabpanel">
                  <h6 class="p-t-20 p-b-20">To use java script you have to add the following style and script tag</h6>
                  <div class="card-body html-editor">&lt;!-- AOS icon --&gt;<br>&lt;link rel="stylesheet" type="text/css" href="../assets/css/aos/aos.css"&gt;<br><br>&lt;!-- AOS js--&gt;<br>&lt;script src='../assets/js/isotope.pkgd.js'&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/aos/aos.js" &gt;&lt;/script&gt;<br>&lt;script src="../assets/js/aos/aos-init.js" &gt;&lt;/script&gt;</div>
                </div>
                <div class="tab-pane fade" id="tilt" role="tabpanel">
                  <h6 class="p-t-20 p-b-20">To use java script you have to add the following script tag</h6>
                  <div class="card-body html-editor">&lt;!-- Tilt js--&gt;<br>&lt;script src="../assets/js/tilt/tilt.jquery.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/tilt/tilt-custom.js"&gt;&lt;/script&gt;</div>
                </div>
                <div class="tab-pane fade" id="wow" role="tabpanel">
                  <h6 class="p-t-20 p-b-20">To use java script you have to add the following style and script tag</h6>
                  <div class="card-body html-editor">&lt;!-- WOW js--&gt;<br>&lt;script src="../assets/js/wow/wow.min.js" &gt;&lt;/script&gt;<br>&lt;script src="../assets/js/wow/wow-init.js" &gt;&lt;/script&gt;</div>
                </div>
              </div>
            </div>
          </div>
          <div id="section44">
            <div class="card-body">
              <hr class="hr">
              <h5 class="my-4">Icons</h5>
              <p class="m-t-25">
                To use another types button you have to link the related css file
                according to types of buttons in a head tag
              </p>
            </div>
          </div>
          <div id="section45">
            <div class="card-body">
              <hr class="hr">
              <h5 class="my-4">Forms</h5>
              <ul class="nav nav-tabs" id="myTab7" role="tablist">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#form-validation" role="tab" aria-selected="true" data-original-title="" title="">form-validation</a></li>
              </ul>
              <div class="tab-content" id="myTabContent7">
                <div class="tab-pane fade show active" id="form-validation" role="tabpanel">
                  <h6 class="p-t-20 p-b-20">To use java script you have to add the following script tag</h6>
                  <div class="card-body html-editor">&lt;script src="../assets/js/form-validation-custom.js" &gt;&lt;/script&gt;</div>
                </div>
              </div>
            </div>
          </div>
          <div id="section46">
            <div class="card-body">
              <hr class="hr">
              <h5 class="my-4">Tables</h5>
              <ul class="nav nav-tabs" id="myTab8" role="tablist">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#bootstrap-tables" role="tab" aria-selected="true" data-original-title="" title="">Bootstrap tables</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#data-tables" role="tab" aria-selected="true" data-original-title="" title="">Data tables</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#extension-data-tables" role="tab" aria-selected="true" data-original-title="" title="">
                    extension data
                    tables</a></li>
              </ul>
              <div class="tab-content" id="myTabContent8">
                <div class="tab-pane fade show active" id="bootstrap-tables" role="tabpanel">
                  <div class="fluid-container py-4">
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Username</th>
                            <th scope="col">Role</th>
                            <th scope="col">Country</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Alexander</td>
                            <td>Orton</td>
                            <td>@mdorton</td>
                            <td>Admin</td>
                            <td>USA</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>John Deo</td>
                            <td>Deo</td>
                            <td>@johndeo</td>
                            <td>User</td>
                            <td>USA</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Randy Orton</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>admin</td>
                            <td>UK</td>
                          </tr>
                          <tr>
                            <th scope="row">4</th>
                            <td>Randy Mark</td>
                            <td>Ottandy</td>
                            <td>@mdothe</td>
                            <td>user</td>
                            <td>AUS</td>
                          </tr>
                          <tr>
                            <th scope="row">5</th>
                            <td>Ram Jacob</td>
                            <td>Thornton</td>
                            <td>@twitter</td>
                            <td>admin</td>
                            <td>IND</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="card-body html-editor">&lt;div class="table-responsive"&gt;<br>&lt;table class="table"&gt;<br>&lt;thead&gt;<br>&lt;tr&gt;<br>&lt;th scope="col"&gt;#&lt;/th&gt;<br>&lt;th scope="col"&gt;First Name&lt;/th&gt;<br>&lt;th scope="col"&gt;Last Name&lt;/th&gt;<br>&lt;th scope="col"&gt;Username&lt;/th&gt;<br>&lt;th scope="col"&gt;Role&lt;/th&gt;<br>&lt;th scope="col"&gt;Country&lt;/th&gt;<br>&lt;/tr&gt;<br>&lt;/thead&gt;<br>&lt;tbody&gt;<br>&lt;tr&gt;<br>&lt;th scope="row"&gt;1&lt;/th&gt;<br>&lt;td&gt;Alexander&lt;/td&gt;<br>&lt;td&gt;Orton&lt;/td&gt;<br>&lt;td&gt;@mdorton&lt;/td&gt;<br>&lt;td&gt;Admin&lt;/td&gt;<br>&lt;td&gt;USA&lt;/td&gt;<br>&lt;/tr&gt;<br>&lt;tr&gt;<br>&lt;th scope="row"&gt;2&lt;/th&gt;<br>&lt;td&gt;John Deo&lt;/td&gt;<br>&lt;td&gt;Deo&lt;/td&gt;<br>&lt;td&gt;@johndeo&lt;/td&gt;<br>&lt;td&gt;User&lt;/td&gt;<br>&lt;td&gt;USA&lt;/td&gt;<br>&lt;/tr&gt;<br>&lt;tr&gt;<br>&lt;th scope="row"&gt;3&lt;/th&gt;<br>&lt;td&gt;Randy Orton&lt;/td&gt;<br>&lt;td&gt;the Bird&lt;/td&gt;<br>&lt;td&gt;@twitter&lt;/td&gt;<br>&lt;td&gt;admin&lt;/td&gt;<br>&lt;td&gt;UK&lt;/td&gt;<br>&lt;/tr&gt;<br>&lt;tr&gt;<br>&lt;th scope="row"&gt;4&lt;/th&gt;<br>&lt;td&gt;Randy Mark&lt;/td&gt;<br>&lt;td&gt;Ottandy&lt;/td&gt;<br>&lt;td&gt;@mdothe&lt;/td&gt;<br>&lt;td&gt;user&lt;/td&gt;<br>&lt;td&gt;AUS&lt;/td&gt;<br>&lt;/tr&gt;<br>&lt;tr&gt;<br>&lt;th scope="row"&gt;5&lt;/th&gt;<br>&lt;td&gt;Ram Jacob&lt;/td&gt;<br>&lt;td&gt;Thornton&lt;/td&gt;<br>&lt;td&gt;@twitter&lt;/td&gt;<br>&lt;td&gt;admin&lt;/td&gt;<br>&lt;td&gt;IND&lt;/td&gt;<br>&lt;/tr&gt;<br>&lt;/tbody&gt;<br>&lt;/table&gt;<br>&lt;/div&gt;</div>
                </div>
                <div class="tab-pane fade" id="data-tables" role="tabpanel">
                  <h6 class="p-t-20 p-b-20">To use java script you have to add the following script tag</h6>
                  <div class="card-body html-editor">&lt;script src="../assets/js/form-validation-custom.js" &gt;&lt;/script&gt;</div>
                </div>
                <div class="tab-pane fade" id="extension-data-tables" role="tabpanel">
                  <h6 class="p-t-20 p-b-20">To use java script you have to add the following style and script tag</h6>
                  <div class="card-body html-editor">&lt;!--JSGrid css--&gt;<br>&lt;link rel="stylesheet" type="text/css" href="../assets/css/datatables.css" /&gt;<br>&lt;link rel="stylesheet" type="text/css" href="../assets/css/datatable-extension.css"&gt;<br><br>&lt;!--Datatable extension js--&gt;<br>&lt;script src="../assets/js/datatables/jquery.dataTables.min.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/datatable-extension/dataTables.buttons.min.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/datatable-extension/jszip.min.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/datatable-extension/pdfmake.min.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/datatable-extension/vfs_fonts.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/datatable-extension/dataTables.autoFill.min.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/datatable-extension/dataTables.select.min.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/datatable-extension/buttons.print.min.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/datatable-extension/buttons.html5.min.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/datatable-extension/dataTables.bootstrap4.min.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/datatable-extension/dataTables.responsive.min.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/datatable-extension/responsive.bootstrap4.min.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/datatable-extension/dataTables.keyTable.min.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/datatable-extension/custom.js"&gt;&lt;/script&gt;</div>
                </div>
              </div>
            </div>
          </div>
          <div id="section47">
            <div class="card-body">
              <hr class="hr">
              <h5 class="my-4">Cards</h5>
              <ul class="nav nav-tabs" id="myTab9" role="tablist">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#basic-card" role="tab" aria-selected="true" data-original-title="" title="">Basic cards</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#draggable-cards" role="tab" aria-selected="true" data-original-title="" title="">Draggable Cards</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#theme-cards" role="tab" aria-selected="true" data-original-title="" title="">Theme Cards</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tabbed-cards" role="tab" aria-selected="true" data-original-title="" title="">Tabbed Cards    </a></li>
              </ul>
              <div class="tab-content" id="myTabContent9">
                <div class="tab-pane fade show active" id="basic-card" role="tabpanel">
                  <div class="fluid-container py-4">
                    <div class="card">
                      <div class="card-header">
                        <h6>Basic Card</h6>
                      </div>
                    </div>
                  </div>
                  <div class="card-body html-editor">&lt;div class="card"&gt;<br> &lt;div class="card-header"&gt;<br> &lt;h5&gt;Basic Card&lt;/h5&gt;<br> &lt;/div&gt;<br> &lt;div class="card-body"&gt;<br> &lt;p class="mb-0"&gt; Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. &lt;/p&gt;<br>&lt;/div&gt;<br>&lt;/div&gt;</div>
                </div>
                <div class="tab-pane fade" id="draggable-cards" role="tabpanel">
                  <h6 class="p-t-20 p-b-20">To use java script you have to add the following script tag</h6>
                  <div class="card-body html-editor">&lt;!--Sortable JS--&gt;<br>&lt;script src="../assets/js/dragable/jquery.ui.min.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/dragable/sortable.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/dragable/sortable-custom.js"&gt;&lt;/script&gt;</div>
                </div>
                <div class="tab-pane fade show" id="theme-cards" role="tabpanel">
                  <div class="fluid-container py-4">
                    <div class="card">
                      <div class="card-header">
                        <h6>Theme Card</h6>
                      </div>
                    </div>
                  </div>
                  <div class="card-body html-editor">&lt;div class="card card-g-primary"&gt;<br> &lt;div class="card-header"&gt;<br> &lt;h5&gt;primary-gradient&lt;/h5&gt;<br> &lt;/div&gt;<br> &lt;div class="card-body"&gt;<br> &lt;p class="mb-0"&gt; Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. &lt;/p&gt;<br>&lt;/div&gt;<br>&lt;/div&gt;</div>
                </div>
              </div>
            </div>
          </div>
          <div id="section48">
            <div class="card-body">
              <hr class="hr">
              <h5 class="my-4">Timeline</h5>
              <ul class="nav nav-tabs" id="myTab10" role="tablist">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#timeline1" role="tab" aria-selected="true" data-original-title="" title="">Timeline1</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#timeline2" role="tab" aria-selected="true" data-original-title="" title="">Timeline2</a></li>
              </ul>
              <div class="tab-content" id="myTabContent10">
                <div class="tab-pane fade show active" id="timeline1" role="tabpanel">
                  <h6 class="p-t-20 p-b-20">To use java script you have to add the following script tag</h6>
                  <div class="card-body html-editor">&lt;!-- Timeline js--&gt;<br>&lt;script src="../assets/js/timeline-v-1/main.js" &gt;&lt;/script&gt;<br>&lt;script src="../assets/js/modernizr.js" &gt;&lt;/script&gt;</div>
                </div>
                <div class="tab-pane fade" id="timeline2" role="tabpanel">
                  <h6 class="p-t-20 p-b-20">To use java script you have to add the following script tag</h6>
                  <div class="card-body html-editor">&lt;!-- Timeline js--&gt;<br>&lt;script src="../assets/js/timeline-v-2/jquery.timeliny.min.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/timeline-v-2/timeline-v-2-custom.js" &gt;&lt;/script&gt;</div>
                </div>
              </div>
            </div>
          </div>
          <div id="section49">
            <div class="card-body">
              <hr class="hr">
              <h5 class="my-4">Charts</h5>
              <ul class="nav nav-tabs" id="myTab11" role="tablist">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#chart-google" role="tab" aria-selected="true" data-original-title="" title="">Google Charts</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#chart-sparkline" role="tab" aria-selected="true" data-original-title="" title="">sparkline charts</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#chart-flot" role="tab" aria-selected="true" data-original-title="" title="">
                    Flot charts
                    tables</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#chart-radial" role="tab" aria-selected="true" data-original-title="" title="">Radial charts</a></li>
              </ul>
              <div class="tab-content" id="myTabContent11">
                <div class="tab-pane fade show active" id="chart-google" role="tabpanel">
                  <h6 class="p-t-20 p-b-20">To use java script you have to add the following script tag</h6>
                  <div class="card-body html-editor">&lt;!-- google Chart JS--&gt;<br>&lt;script src="../assets/js/chart/google-chart-loader.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/chart/google-chart.js"&gt;&lt;/script&gt;</div>
                </div>
                <div class="tab-pane fade" id="chart-sparkline" role="tabpanel">
                  <h6 class="p-t-20 p-b-20">To use java script you have to add the following script tag</h6>
                  <div class="card-body html-editor">&lt;!--Sparkline Chart JS--&gt;<br>&lt;script src="../assets/js/sparkline/sparkline.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/sparkline/sparkline-script.js"&gt;&lt;/script&gt;</div>
                </div>
                <div class="tab-pane fade" id="chart-flot" role="tabpanel">
                  <h6 class="p-t-20 p-b-20">To use java script you have to add the following style and script tag</h6>
                  <div class="card-body html-editor">&lt;!-- flot Chart JS--&gt;<br>&lt;script src="../assets/js/flot-chart/excanvas.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/flot-chart/jquery.flot.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/flot-chart/jquery.flot.time.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/flot-chart/jquery.flot.symbol.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/flot-chart/jquery.flot.categories.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/flot-chart/jquery.flot.stack.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/flot-chart/flot-script.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/flot-chart/jquery.flot.pie.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/flot-chart/jquery.flot.symbol.js"&gt;&lt;/script&gt;</div>
                </div>
                <div class="tab-pane fade" id="chart-radial" role="tabpanel">
                  <h6 class="p-t-20 p-b-20">To use java script you have to add the following script tag</h6>
                  <div class="card-body html-editor">&lt;!--Sparkline Chart JS--&gt;<br>&lt;script src="../assets/js/sparkline/sparkline.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/sparkline/sparkline-script.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/radial-chart-tooltip.js" &gt;&lt;/script&gt;</div>
                </div>
              </div>
              <ul class="nav nav-tabs m-t-45" id="myTab12" role="tablist">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#chart-morris" role="tab" aria-selected="true" data-original-title="" title="">morris Charts</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#chart-chatjs" role="tab" aria-selected="true" data-original-title="" title="">Chatjs charts</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#chart-chartlist" role="tab" aria-selected="true" data-original-title="" title="">Chartlist charts</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#chart-knob" role="tab" aria-selected="true" data-original-title="" title="">Knob charts</a></li>
              </ul>
              <div class="tab-content" id="myTabContent12">
                <div class="tab-pane fade show active" id="chart-morris" role="tabpanel">
                  <h6 class="p-t-20 p-b-20">To use java script you have to add the following script tag</h6>
                  <div class="card-body html-editor">&lt;!-- Morris Chart JS--&gt;<br>&lt;script src="../assets/js/morris-chart/raphael.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/morris-chart/morris.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/morris-chart/prettify.min.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/morris-chart/morris-script.js"&gt;&lt;/script&gt;</div>
                </div>
                <div class="tab-pane fade" id="chart-chatjs" role="tabpanel">
                  <h6 class="p-t-20 p-b-20">To use java script you have to add the following script tag</h6>
                  <div class="card-body html-editor">&lt;!-- Chart JS--&gt;<br>&lt;script src="../assets/js/chart/chartjs/Chart.min.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/chart/chartjs/chart.custom.js"&gt;&lt;/script&gt;</div>
                </div>
                <div class="tab-pane fade" id="chart-chartlist" role="tabpanel">
                  <h6 class="p-t-20 p-b-20">To use css and java script you have to add the following style and script tag</h6>
                  <div class="card-body html-editor">&lt;!-- Chartist --&gt;<br>&lt;link rel="stylesheet" type="text/css" href="../assets/css/chartist.css"&gt;<br><br>&lt;!-- Chartist --&gt;<br>&lt;script src="../assets/js/chartist/chartist.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/chartist/chartist-custom.js"&gt;&lt;/script&gt;</div>
                </div>
                <div class="tab-pane fade" id="chart-knob" role="tabpanel">
                  <h6 class="p-t-20 p-b-20">To use java script you have to add the following script tag</h6>
                  <div class="card-body html-editor">&lt;!--Knob Chart JS--&gt;<br>&lt;script src="../assets/js/knob/knob.min.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/knob/knob-chart.js"&gt;&lt;/script&gt;</div>
                </div>
              </div>
            </div>
          </div>
          <div id="section410">
            <div class="card-body">
              <hr class="hr">
              <h5 class="my-4">Maps</h5>
              <ul class="nav nav-tabs" id="myTab13" role="tablist">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#g-map" role="tab" aria-selected="true" data-original-title="" title="">Map Js</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#vector-map" role="tab" aria-selected="true" data-original-title="" title="">Vector map</a></li>
              </ul>
              <div class="tab-content" id="myTabContent13">
                <div class="tab-pane fade show active" id="g-map" role="tabpanel">
                  <h6 class="p-t-20 p-b-20">To use java script you have to add the following script tag</h6>
                  <div class="card-body html-editor">&lt;!--Map css--&gt;<br>&lt;link rel="stylesheet" type="text/css" href="../assets/css/mapsjs-ui.css"&gt;<br><br>&lt;!-- Map js--&gt;<br>&lt;script src="../assets/js/map-js/mapsjs-core.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/map-js/mapsjs-service.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/map-js/mapsjs-ui.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/map-js/mapsjs-mapevents.js"&gt;&lt;/script&gt;</div>
                </div>
                <div class="tab-pane fade" id="vector-map" role="tabpanel">
                  <h6 class="p-t-20 p-b-20">To use css and java script you have to add the following style and script tag</h6>
                  <div class="card-body html-editor">&lt;!--Vector Map css--&gt;<br>&lt;link rel="stylesheet" type="text/css" href="../assets/css/vector-map.css"&gt;<br><br>&lt;!--vector map js--&gt;<br>&lt;script src="../assets/js/vector-map/jquery-jvectormap-2.0.2.min.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/vector-map/map/jquery-jvectormap-world-mill-en.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/vector-map/map/jquery-jvectormap-us-aea-en.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/vector-map/map/jquery-jvectormap-uk-mill-en.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/vector-map/map/jquery-jvectormap-au-mill.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/vector-map/map/jquery-jvectormap-chicago-mill-en.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/vector-map/map/jquery-jvectormap-in-mill.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/vector-map/map/jquery-jvectormap-asia-mill.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/vector-map/map-vector.js"&gt;&lt;/script&gt;</div>
                </div>
              </div>
            </div>
          </div>
          <div id="section411">
            <div class="card-body">
              <hr class="hr">
              <h5 class="my-4">Editors</h5>
              <ul class="nav nav-tabs" id="myTab14" role="tablist">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#summer-note" role="tab" aria-selected="true" data-original-title="" title="">Summer note</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#ckeditor" role="tab" aria-selected="true" data-original-title="" title="">Ckeditor</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#simple-mde" role="tab" aria-selected="true" data-original-title="" title="">Simple Mde</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#ace-code" role="tab" aria-selected="true" data-original-title="" title="">Ace Code</a></li>
              </ul>
              <div class="tab-content" id="myTabContent14">
                <div class="tab-pane fade show active" id="summer-note" role="tabpanel">
                  <h6 class="p-t-20 p-b-20">To use css and java script you have to add the following style and script tag</h6>
                  <div class="card-body html-editor">&lt;!-- Summernote css --&gt;<br>&lt;link rel="stylesheet" href="../assets/css/summernote.css"&gt;<br><br>&lt;!--Summer-note js--&gt;<br>&lt;script src="../assets/js/summernote/summernote.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/summernote/summernote.custom.js"&gt;&lt;/script&gt;</div>
                </div>
                <div class="tab-pane fade" id="ckeditor" role="tabpanel">
                  <h6 class="p-t-20 p-b-20">To use java script you have to add the following script tag</h6>
                  <div class="card-body html-editor">&lt;!--ckeditor js--&gt;<br>&lt;script src="../assets/js/ckeditor/ckeditor.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/ckeditor/styles.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/ckeditor/adapters/jquery.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/ckeditor/ckeditor.custom.js"&gt;&lt;/script&gt;</div>
                </div>
                <div class="tab-pane fade" id="simple-mde" role="tabpanel">
                  <h6 class="p-t-20 p-b-20">To use css and java script you have to add the following style and script tag</h6>
                  <div class="card-body html-editor">&lt;!-- Simple-MDE css --&gt;<br>&lt;link rel="stylesheet prefetch" href="../assets/css/simple-mde.css"&gt;<br><br>&lt;!-- Simple MDE editor jquery--&gt;<br>&lt;script src="../assets/js/simple-mde/simplemde.min.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/simple-mde/simplemde.custom.js"&gt;&lt;/script&gt;</div>
                </div>
                <div class="tab-pane fade" id="ace-code" role="tabpanel">
                  <h6 class="p-t-20 p-b-20">To use css and java script you have to add the following style and script tag</h6>
                  <div class="card-body html-editor">&lt;!--ace code editor js--&gt;<br>&lt;script src="../assets/js/ace-editor/ace.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/ace-editor/ace-custom.js"&gt;&lt;/script&gt;</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="section5">
          <div class="card">
            <div class="card-body">
              <h4 class="my-4">Apps</h4>
              <hr class="hr">
              <div id="section51">
                <h5 class="my-4">Users</h5>
                <ul class="nav nav-tabs" id="myTab15" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#users-profile" role="tab" aria-selected="true" data-original-title="" title="">Users profile</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#users-card" role="tab" aria-selected="false" data-original-title="" title="">Users card</a></li>
                </ul>
                <div class="tab-content" id="myTabContent15">
                  <div class="tab-pane fade show active" id="users-profile" role="tabpanel">
                    <h6 class="p-t-20 p-b-20">
                      You don't need to add any additional css or js.
                      The css and js which describe in a html page is default. Use the code of
                      it to use it
                    </h6>
                  </div>
                  <div class="tab-pane fade" id="users-card" role="tabpanel">
                    <h6 class="p-t-20 p-b-20">
                      You don't need to add any additional css or js.
                      The css and js which describe in a html page is default. Use the code of
                      it to use it
                    </h6>
                  </div>
                </div>
              </div>
            </div>
            <div id="section52">
              <div class="card-body p-t-0">
                <hr class="hr">
                <h5 class="my-4 mt-0">Calender</h5>
                <ul class="nav nav-tabs" id="myTab16" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#full-calender-basic" role="tab" aria-selected="true" data-original-title="" title="">Full Calender Basic</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#full-calender-events" role="tab" aria-selected="false" data-original-title="" title="">Full Calender Events</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#full-calender-advance" role="tab" aria-selected="false" data-original-title="" title="">Calender Advance</a></li>
                </ul>
                <div class="tab-content" id="myTabContent16">
                  <div class="tab-pane fade show active" id="full-calender-basic" role="tabpanel">
                    <h6 class="p-t-20 p-b-20">To use java script you have to add the following style and script tag</h6>
                    <div class="card-body html-editor">&lt;!-- calendar css --&gt;<br>&lt;link rel="stylesheet" type="text/css" href="../assets/css/calendar.css"&gt;<br><br>&lt;!--Calendar js--&gt;<br>&lt;script src="../assets/js/calendar/moment.min.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/calendar/fullcalendar.min.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/calendar/fullcalendar-custom.js"&gt;&lt;/script&gt;</div>
                  </div>
                  <div class="tab-pane fade" id="full-calender-events" role="tabpanel">
                    <h6 class="p-t-20 p-b-20">for events of calender you have to add the same css and js which are used for basic calender</h6>
                  </div>
                  <div class="tab-pane fade" id="full-calender-advance" role="tabpanel">
                    <h6 class="p-t-20 p-b-20">for advance calender you have to add the same css and js which are used for basic calender</h6>
                  </div>
                </div>
              </div>
            </div>
            <div id="section53">
              <div class="card-body">
                <hr class="hr">
                <h5 class="my-4">Gallery</h5>
                <ul class="nav nav-tabs" id="myTab17" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#gallery-grid" role="tab" aria-selected="true" data-original-title="" title="">Gallery grid</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#gallery-desk" role="tab" aria-selected="false" data-original-title="" title="">Gallery with desk</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Massonry" role="tab" aria-selected="false" data-original-title="" title="">Masonry gallery</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Masonry-desk" role="tab" aria-selected="false" data-original-title="" title="">Masonry gallery desk</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#hover-effects" role="tab" aria-selected="true" data-original-title="" title="">Hover Effects</a></li>
                </ul>
                <div class="tab-content" id="myTabContent17">
                  <div class="tab-pane fade show active" id="gallery-grid" role="tabpanel">
                    <h6 class="p-t-20 p-b-20">To use java script you have to add the following script tag</h6>
                    <div class="card-body html-editor">&lt;!-- lightgallery js--&gt;<br>&lt;script src="../assets/js/lightgallery/lightgallery.min.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/lightgallery/lg-pager.min.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/lightgallery/lg-autoplay.min.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/lightgallery/lg-fullscreen.min.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/lightgallery/lg-zoom.min.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/lightgallery/lg-hash.min.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/lightgallery/lg-share.min.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/lightgallery/lg-thumbnail.min.js"&gt;&lt;/script&gt;</div>
                  </div>
                  <div class="tab-pane fade" id="gallery-desk" role="tabpanel">
                    <h6 class="p-t-20 p-b-20">for this you have to add the same css and js which are used for grid gallery</h6>
                  </div>
                  <div class="tab-pane fade" id="Massonry" role="tabpanel">
                    <h6 class="p-t-20 p-b-20">To use java script you have to add the grid gallery js also following script tag</h6>
                    <div class="card-body html-editor">&lt;!--Masonry gallery js--&gt;<br>&lt;script src="../assets/js/masonry-gallery.js"&gt;&lt;/script&gt;</div>
                  </div>
                  <div class="tab-pane fade" id="Masonry-desk" role="tabpanel">
                    <h6 class="p-t-20 p-b-20">for this you have to add the same css and js which are used for masonry gallery</h6>
                  </div>
                  <div class="tab-pane fade" id="hover-effects" role="tabpanel">
                    <h6 class="p-t-20 p-b-20">You don't need to add any additional css or js for the gallery hover page</h6>
                  </div>
                </div>
              </div>
            </div>
            <div id="section54">
              <div class="card-body">
                <hr class="hr">
                <h5 class="my-4">Email</h5>
                <ul class="nav nav-tabs" id="myTab18" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#email-app" role="tab" aria-selected="true" data-original-title="" title="">Email App</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#email-compose" role="tab" aria-selected="false" data-original-title="" title="">Email Compose</a></li>
                </ul>
                <div class="tab-content" id="myTabContent18">
                  <div class="tab-pane fade show active" id="email-app" role="tabpanel">
                    <h6 class="p-t-20 p-b-20">To use java script you have to add the following script tag</h6>
                    <div class="card-body html-editor">&lt;!--Email js--&gt;<br>&lt;script src="../assets/js/email-app.js"&gt;&lt;/script&gt;</div>
                  </div>
                  <div class="tab-pane fade" id="email-compose" role="tabpanel">
                    <h6 class="p-t-20 p-b-20">for this you have to add the same js which are used for Email application</h6>
                  </div>
                </div>
              </div>
            </div>
            <div id="section55">
              <div class="card-body">
                <hr class="hr">
                <h5 class="my-4">Blog</h5>
                <h6 class="p-t-20 p-b-20">You don't need to add any extra css or js to add the blog code</h6>
              </div>
            </div>
            <div id="section56">
              <div class="card-body">
                <hr class="hr">
                <h5 class="my-4">Chat</h5>
                <ul class="nav nav-tabs" id="myTab19" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#chat-app" role="tab" aria-selected="true" data-original-title="" title="">Chat App</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#video-chat" role="tab" aria-selected="false" data-original-title="" title="">Video Chat</a></li>
                </ul>
                <div class="tab-content" id="myTabContent19">
                  <div class="tab-pane fade show active" id="chat-app" role="tabpanel">
                    <h6 class="p-t-20 p-b-20">To use java script you have to add the following script tag</h6>
                  </div>
                  <div class="tab-pane fade" id="video-chat" role="tabpanel">
                    <h6 class="p-t-20 p-b-20">for this you don't need to add any additional css or js</h6>
                  </div>
                </div>
              </div>
            </div>
            <div id="section57">
              <div class="card-body">
                <hr class="hr">
                <h5 class="my-4">Support ticket</h5>
                <h6 class="p-t-20 p-b-20">To use java script you have to add the following script tag</h6>
                <div class="card-body html-editor">&lt;script src="../assets/js/support-ticket-custom.js" &gt;&lt;/script&gt;</div>
              </div>
            </div>
            <div id="section58">
              <div class="card-body">
                <hr class="hr">
                <h5 class="my-4">TODO</h5>
                <h6 class="p-t-20 p-b-20">To use java script you have to add the following script tag</h6>
                <div class="card-body html-editor">&lt;!-- To-do js --&gt;<br>&lt;script src="../assets/js/todo/todo.js"&gt;&lt;/script&gt;</div>
              </div>
            </div>
            <div id="section59">
              <div class="card-body">
                <hr class="hr">
                <h5 class="my-4">Landing page</h5>
                <h6 class="p-t-20 p-b-20">You don't need to add any additional css or js for the landing page</h6>
              </div>
            </div>
            <div id="section510">
              <div class="card-body p-t-0">
                <hr class="hr">
                <h5 class="my-4 mt-0">Ecommerce</h5>
                <ul class="nav nav-tabs" id="myTab20" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#product" role="tab" aria-selected="true" data-original-title="" title="">Product</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#product-page" role="tab" aria-selected="false" data-original-title="" title="">Product page</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#payment-product" role="tab" aria-selected="false" data-original-title="" title="">Product List</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#payment-details" role="tab" aria-selected="false" data-original-title="" title="">Payment Details</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#ordre-history" role="tab" aria-selected="false" data-original-title="" title="">Order History  </a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#invoice-template" role="tab" aria-selected="false" data-original-title="" title="">Invoice template</a></li>
                </ul>
                <div class="tab-content" id="myTabContent20">
                  <div class="tab-pane fade show active" id="product" role="tabpanel">
                    <h6 class="p-t-20 p-b-20">There is no need to add any additional css or js</h6>
                  </div>
                  <div class="tab-pane fade" id="product-page" role="tabpanel">
                    <h6 class="p-t-20 p-b-20">There is no need to add any additional css or js</h6>
                  </div>
                  <div class="tab-pane fade" id="payment-product" role="tabpanel">
                    <h6 class="p-t-20 p-b-20">There is no need to add any additional css or js</h6>
                  </div>
                  <div class="tab-pane fade" id="payment-details" role="tabpanel">
                    <h6 class="p-t-20 p-b-20">There is no need to add any additional css or js</h6>
                  </div>
                  <div class="tab-pane fade" id="order-history" role="tabpanel">
                    <h6 class="p-t-20 p-b-20">There is no need to add any additional css or js    </h6>
                  </div>
                  <div class="tab-pane fade" id="invoice-template" role="tabpanel">
                    <h6 class="p-t-20 p-b-20">To use java script for print you have to add the following script tag</h6>
                    <div class="card-body html-editor">&lt;!--print js--&gt;<br>&lt;script src="../assets/js/print.js"&gt;&lt;/script&gt;</div>
                  </div>
                </div>
              </div>
            </div>
            <div id="section511">
              <div class="card-body p-t-0">
                <hr class="hr">
                <h5 class="my-4 mt-0">Pricing</h5>
                <h6 class="p-t-20 p-b-20">There is no need to add any additional css or js</h6>
              </div>
            </div>
          </div>
        </div>
        <div id="section6">
          <div class="card">
            <div class="card-body">
              <h4>Builder</h4>
            </div>
            <div id="section62">
              <div class="card-body p-t-0">
                <hr class="hr">
                <h5 class="my-4 mt-0">Form builder</h5>
                <ul class="nav nav-tabs" id="myTab21" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#form-builder-1" role="tab" aria-selected="true" data-original-title="" title="">Full Calender Basic</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#form-builder-2" role="tab" aria-selected="false" data-original-title="" title="">Full Calender Events</a></li>
                </ul>
                <div class="tab-content" id="myTabContent21">
                  <div class="tab-pane fade show active" id="form-builder-1" role="tabpanel">
                    <h6 class="p-t-20 p-b-20">To use java script you have to add the following script tag</h6>
                    <div class="card-body html-editor">&lt;!--Form builder js--&gt;<br>&lt;script src="../assets/js/form-builder-1/require.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/form-builder-1/main-built.js"&gt;&lt;/script&gt;</div>
                  </div>
                  <div class="tab-pane fade" id="form-builder-2" role="tabpanel">
                    <h6 class="p-t-20 p-b-20">To use java script you have to add the following script tag</h6>
                    <div class="card-body html-editor">&lt;!--Form builder 2--&gt;<br>&lt;script src="../assets/js/form-builder-2/beautifyhtml.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/form-builder-2/form-builder-2.js"&gt;&lt;/script&gt;</div>
                  </div>
                </div>
              </div>
            </div>
            <div id="section63">
              <div class="card-body">
                <hr class="hr">
                <h5 class="my-4">Button builder</h5>
                <h6 class="p-t-20 p-b-20">To use java css and java script you have to add the following style and script tag</h6>
                <div class="card-body html-editor">&lt;!-- ButtonBuilder css --&gt;<br>&lt;link rel="stylesheet" type="text/css" href="../assets/css/button-builder.css"&gt;<br><br>&lt;!--Button Builder--&gt;<br>&lt;script src="../assets/js/button-builder/colorpicker.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/button-builder/clipboard.min.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/button-builder/generator.js"&gt;&lt;/script&gt;<br>&lt;script src="../assets/js/button-builder/extend-1.0.js"&gt;&lt;/script&gt;</div>
              </div>
            </div>
          </div>
          <div id="section7">
            <div class="card">
              <div class="card-body">
                <h4 class="my-4">Credits</h4>
                <p>We have used the following plugins in Serein admin</p>
                <div class="row">
                  <div class="col-12">
                    <ul class="list-ticked">
                      <li>Ace editor<a href="https://github.com/ajaxorg/ace" target="_blank" data-original-title="" title="">: https://github.com/ajaxorg/ace</a></li>
                      <li>aos<a href="https://michalsnik.github.io/aos/" target="_blank" data-original-title="" title="">: https://michalsnik.github.io/aos/</a></li>
                      <li>Bootstrap<a href="https://getbootstrap.com/" target="_blank" data-original-title="" title="">https://getbootstrap.com/</a></li>
                      <li>Calender<a href=" http://arshaw.com/fullcalendar/" target="_blank" data-original-title="" title=""> http://arshaw.com/fullcalendar/</a></li>
                      <li>Chart.js<a href="http://chartjs.org/" target="_blank" data-original-title="" title="">http://chartjs.org/</a></li>
                      <li>Chartis<a href="https://gionkunz.github.io/chartist-js/" target="_blank" data-original-title="" title="">https://gionkunz.github.io/chartist-js/</a></li>
                      <li>Ckeditor<a href=" https://docs.ckeditor.com/ckeditor4/docs/#!/guide/dev_styles-section-style-rules" target="_blank" data-original-title="" title="">https://docs.ckeditor.com/ckeditor4/docs/#!/guide/dev_styles-section-style-rules</a></li>
                      <li>clipboard<a href="https://zenorocha.github.io/clipboard.js" target="_blank" data-original-title="" title="">https://zenorocha.github.io/clipboard.js</a></li>
                      <li>Counter<a href="https://github.com/imakewebthings/waypoints/blob/master/" target="_blank" data-original-title="" title="">https://github.com/imakewebthings/waypoints/blob/master/licenses.txt</a></li>
                      <li>Datatable extension<a href="https://raw.github.com/Stuk/jszip/master/" target="_blank" data-original-title="" title="">https://raw.github.com/Stuk/jszip/master/</a></li>
                      <li>Datatables<a href="https://datatables.net/" target="_blank" data-original-title="" title="">https://datatables.net/</a></li>
                      <li>Date picker<a href="http://www.daterangepicker.com/" target="_blank" data-original-title="" title="">http://www.daterangepicker.com/</a></li>
                      <li>Date Time Picker<a href="https://tempusdominus.github.io/bootstrap-4/" target="_blank" data-original-title="" title="">https://tempusdominus.github.io/bootstrap-4/</a></li>
                      <li>Date range Picker<a href="http://www.daterangepicker.com/" target="_blank" data-original-title="" title="">http://www.daterangepicker.com/</a></li>
                      <li>Dragable<a href="http://jqueryui.com" target="_blank" data-original-title="" title="">http://jqueryui.com</a></li>
                      <li>Drill down<a href="https://foundation.zurb.com/sites/docs/drilldown-menu.html" target="_blank" data-original-title="" title="">https://foundation.zurb.com/sites/docs/drilldown-menu.html</a></li>
                      <li>Drop zone<a href="http://www.dropzonejs.com" target="_blank" data-original-title="" title="">http://www.dropzonejs.com</a></li>
                      <li>Flot chart<a href="http://benalman.com/projects/jquery-resize-plugin/" target="_blank" data-original-title="" title="">http://benalman.com/projects/jquery-resize-plugin/</a></li>
                      <li>Form builder 1<a href="http://github.com/requirejs/" target="_blank" data-original-title="" title="">http://github.com/requirejs/</a></li>
                      <li>Form builder 2<a href="http://jsbeautifier.org/" target="_blank" data-original-title="" title="">http://jsbeautifier.org/</a></li>
                      <li>Form wizard<a href="http://srobbin.com/jquery-plugins/backstretch/" target="_blank" data-original-title="" title="">http://srobbin.com/jquery-plugins/backstretch/</a></li>
                      <li>Image cropper<a href="https://github.com/fengyuanchen/cropper" target="_blank" data-original-title="" title="">https://github.com/fengyuanchen/cropper</a></li>
                      <li>Js grid<a href="http://js-grid.com" target="_blank" data-original-title="" title="">http://js-grid.com</a></li>
                      <li>Light gallery<a href="http://brandon.aaron.sh" target="_blank" data-original-title="" title="">http://brandon.aaron.sh</a></li>
                      <li>Morris chart<a href="http://raphaeljs.com" target="_blank" data-original-title="" title="">http://raphaeljs.com</a></li>
                      <li>Notify<a href="https://notifyjs.jpillora.com/" target="_blank" data-original-title="" title="">https://notifyjs.jpillora.com/</a></li>
                      <li>Owl carousel<a href="https://github.com/OwlCarousel2/OwlCarousel2/blob/master/LICENSE" target="_blank" data-original-title="" title="">https://github.com/OwlCarousel2/OwlCarousel2/blob/master/LICENSE</a></li>
                      <li>Page builder<a href="http://ckeditor.com/license" target="_blank" data-original-title="" title="">http://ckeditor.com/license</a></li>
                      <li>Particles<a href="http://opensource.org/licenses/MIT" target="_blank" data-original-title="" title="">http://opensource.org/licenses/MIT</a></li>
                      <li>Range slider<a href="https://github.com/IonDen/ion.rangeSlider" target="_blank" data-original-title="" title="">https://github.com/IonDen/ion.rangeSlider</a></li>
                      <li>Rating<a href="http://github.com/antennaio/jquery-bar-rating" target="_blank" data-original-title="" title="">http://github.com/antennaio/jquery-bar-rating</a></li>
                      <li>Scroll reveal<a href="https://modernizr.com/download/" target="_blank" data-original-title="" title="">https://modernizr.com/download/</a></li>
                      <li>Select 2<a href=" https://github.com/select2/select2/blob/master/LICENSE.md" target="_blank" data-original-title="" title="">https://github.com/select2/select2/blob/master/LICENSE.md</a></li>
                      <li>Simple mde<a href="https://github.com/NextStepWebs/simplemde-markdown-editor" target="_blank" data-original-title="" title="">https://github.com/NextStepWebs/simplemde-markdown-editor</a></li>
                      <li>Sparkline<a href="http://omnipotent.net/jquery.sparkline/" target="_blank" data-original-title="" title="">http://omnipotent.net/jquery.sparkline/</a></li>
                      <li>Sticky<a href="http://sweetalert.js.org" target="_blank" data-original-title="" title="">http://sweetalert.js.org</a></li>
                      <li>Summer note<a href="https://summernote.org" target="_blank" data-original-title="" title="">https://summernote.org</a></li>
                      <li>time picker<a href="http://weareoutman.github.io/clockpicker/" target="_blank" data-original-title="" title="">http://weareoutman.github.io/clockpicker/</a></li>
                      <li>Touch spin<a href="https://www.virtuosoft.eu/code/bootstrap-touchspin/" target="_blank" data-original-title="" title="">https://www.virtuosoft.eu/code/bootstrap-touchspin/</a></li>
                      <li>Tour<a href="https://github.com/usablica/intro.js" target="_blank" data-original-title="" title="">https://github.com/usablica/intro.js</a></li>
                      <li>Tree<a href="https://www.jstree.com/" target="_blank" data-original-title="" title="">https://www.jstree.com/</a></li>
                      <li>Typehead<a href="https://github.com/twitter/typeahead.js" target="_blank" data-original-title="" title="">https://github.com/twitter/typeahead.js</a></li>
                      <li>Wow<a href="https://wowjs.uk" target="_blank" data-original-title="" title="">https://wowjs.uk</a></li>
                      <li>Isotope<a href="https://isotope.metafizzy.co" target="_blank" data-original-title="" title="">https://isotope.metafizzy.co</a></li>
                      <li>jquery drill-down<a href="http://opensource.org/licenses/mit-license.php" target="_blank" data-original-title="" title="">http://opensource.org/licenses/mit-license.php</a></li>
                      <li>jqueryui<a href="http://jqueryui.com" target="_blank" data-original-title="" title="">http://jqueryui.com</a></li>
                      <li>Vertical menu js<a href="http://www.smartmenus.org/" target="_blank" data-original-title="" title="">http://www.smartmenus.org/</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection