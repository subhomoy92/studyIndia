<?php require "includes/header.php"; ?>
<?php require "includes/menu.php"; ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <form method="POST" action="" onsubmit="return AddQuestion()">
          <div class="col-md-12">
            <h3 class="title">Add New Questions <span class="pull-right"><input type="submit" name="submit" class="btn btn-primary"/></span></h3>
            
          </div>

          <div class="row">            
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Questions</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div id="alerts"></div>
                    <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-one">
                      <!-- <div class="btn-group">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                        </ul>
                      </div>

                      <div class="btn-group">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <li>
                            <a data-edit="fontSize 5">
                              <p style="font-size:17px">Huge</p>
                            </a>
                          </li>
                          <li>
                            <a data-edit="fontSize 3">
                              <p style="font-size:14px">Normal</p>
                            </a>
                          </li>
                          <li>
                            <a data-edit="fontSize 1">
                              <p style="font-size:11px">Small</p>
                            </a>
                          </li>
                        </ul>
                      </div>

                      <div class="btn-group">
                        <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
                        <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
                        <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
                        <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
                      </div>

                      <div class="btn-group">
                        <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
                        <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
                        <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
                        <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
                      </div>

                      <div class="btn-group">
                        <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
                        <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
                        <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
                        <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
                      </div>

                      <div class="btn-group">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
                        <div class="dropdown-menu input-append">
                          <input class="span2" placeholder="URL" type="text" data-edit="createLink" />
                          <button class="btn" type="button">Add</button>
                        </div>
                        <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
                      </div>

                      <div class="btn-group">
                        <a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a>
                        <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
                      </div>

                      <div class="btn-group">
                        <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
                        <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
                      </div> -->
                    </div>

                    <div id="editor-one" class="editor-wrapper"></div>

                    <textarea name="questions"  style="display:none;"></textarea>
                    
                    <br />

                    <div class="ln_solid"></div>

                    
                  </div>
                </div>
              </div>

               <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Solved Answers</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div id="alerts"></div>
                    <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-six">
                      <!-- <div class="btn-group">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                        </ul>
                      </div>

                      <div class="btn-group">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <li>
                            <a data-edit="fontSize 5">
                              <p style="font-size:17px">Huge</p>
                            </a>
                          </li>
                          <li>
                            <a data-edit="fontSize 3">
                              <p style="font-size:14px">Normal</p>
                            </a>
                          </li>
                          <li>
                            <a data-edit="fontSize 1">
                              <p style="font-size:11px">Small</p>
                            </a>
                          </li>
                        </ul>
                      </div>

                      <div class="btn-group">
                        <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
                        <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
                        <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
                        <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
                      </div>

                      <div class="btn-group">
                        <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
                        <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
                        <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
                        <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
                      </div>

                      <div class="btn-group">
                        <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
                        <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
                        <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
                        <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
                      </div>

                      <div class="btn-group">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
                        <div class="dropdown-menu input-append">
                          <input class="span2" placeholder="URL" type="text" data-edit="createLink" />
                          <button class="btn" type="button">Add</button>
                        </div>
                        <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
                      </div>

                      <div class="btn-group">
                        <a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a>
                        <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
                      </div>

                      <div class="btn-group">
                        <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
                        <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
                      </div> -->
                    </div>

                    <div id="editor-six" class="editor-wrapper"></div>

                    <textarea name="answer" id="explanation" style="display:none;"></textarea>                    


                    <div class="ln_solid"></div>

                    
                  </div>
                </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Option 1</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div id="alerts"></div>
                    <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-two">
                      <!-- <div class="btn-group">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                        </ul>
                      </div> -->

                      <!-- <div class="btn-group">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <li>
                            <a data-edit="fontSize 5">
                              <p style="font-size:17px">Huge</p>
                            </a>
                          </li>
                          <li>
                            <a data-edit="fontSize 3">
                              <p style="font-size:14px">Normal</p>
                            </a>
                          </li>
                          <li>
                            <a data-edit="fontSize 1">
                              <p style="font-size:11px">Small</p>
                            </a>
                          </li>
                        </ul>
                      </div> -->

                      <!-- <div class="btn-group">
                        <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
                        <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
                        <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
                        <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
                      </div>

                      <div class="btn-group">
                        <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
                        <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
                        <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
                        <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
                      </div>

                      <div class="btn-group">
                        <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
                        <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
                        <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
                        <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
                      </div> -->

                      <!-- <div class="btn-group">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
                        <div class="dropdown-menu input-append">
                          <input class="span2" placeholder="URL" type="text" data-edit="createLink" />
                          <button class="btn" type="button">Add</button>
                        </div>
                        <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
                      </div>

                      <div class="btn-group">
                        <a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a>
                        <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
                      </div> -->

                      <!-- <div class="btn-group">
                        <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
                        <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
                      </div> -->
                    </div>

                    <div id="editor-two" class="editor-wrapper"></div>

                    <textarea name="option1" id="descr" style="display:none;"></textarea>
                    
                    <br/>
                    <div class="form-check">
                        <input class="form-check-input" name="correct" type="radio" value="1">
                        <label class="form-check-label" for="radio100">Correct</label>
                    </div>
                    <br />

                    <div class="ln_solid"></div>

                    
                  </div>
                </div>
              </div>

              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Option 2</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div id="alerts"></div>
                    <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-three">
                      <!-- <div class="btn-group">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                        </ul>
                      </div>

                      <div class="btn-group">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <li>
                            <a data-edit="fontSize 5">
                              <p style="font-size:17px">Huge</p>
                            </a>
                          </li>
                          <li>
                            <a data-edit="fontSize 3">
                              <p style="font-size:14px">Normal</p>
                            </a>
                          </li>
                          <li>
                            <a data-edit="fontSize 1">
                              <p style="font-size:11px">Small</p>
                            </a>
                          </li>
                        </ul>
                      </div>

                      <div class="btn-group">
                        <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
                        <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
                        <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
                        <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
                      </div>

                      <div class="btn-group">
                        <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
                        <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
                        <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
                        <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
                      </div>

                      <div class="btn-group">
                        <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
                        <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
                        <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
                        <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
                      </div>

                      <div class="btn-group">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
                        <div class="dropdown-menu input-append">
                          <input class="span2" placeholder="URL" type="text" data-edit="createLink" />
                          <button class="btn" type="button">Add</button>
                        </div>
                        <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
                      </div>

                      <div class="btn-group">
                        <a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a>
                        <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
                      </div>

                      <div class="btn-group">
                        <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
                        <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
                      </div> -->
                    </div>

                    <div id="editor-three" class="editor-wrapper"></div>

                    <textarea name="option2" id="descr" style="display:none;"></textarea>
                    
                    <br/>
                    <div class="form-check">
                        <input class="form-check-input" name="correct" type="radio" value="2">
                        <label class="form-check-label" for="radio100">Correct</label>
                    </div>
                    <br />

                    <div class="ln_solid"></div>

                    
                  </div>
                </div>
              </div>

              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Option 3</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div id="alerts"></div>
                    <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-four">
                      <!-- <div class="btn-group">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                        </ul>
                      </div>

                      <div class="btn-group">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <li>
                            <a data-edit="fontSize 5">
                              <p style="font-size:17px">Huge</p>
                            </a>
                          </li>
                          <li>
                            <a data-edit="fontSize 3">
                              <p style="font-size:14px">Normal</p>
                            </a>
                          </li>
                          <li>
                            <a data-edit="fontSize 1">
                              <p style="font-size:11px">Small</p>
                            </a>
                          </li>
                        </ul>
                      </div>

                      <div class="btn-group">
                        <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
                        <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
                        <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
                        <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
                      </div>

                      <div class="btn-group">
                        <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
                        <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
                        <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
                        <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
                      </div>

                      <div class="btn-group">
                        <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
                        <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
                        <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
                        <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
                      </div>

                      <div class="btn-group">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
                        <div class="dropdown-menu input-append">
                          <input class="span2" placeholder="URL" type="text" data-edit="createLink" />
                          <button class="btn" type="button">Add</button>
                        </div>
                        <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
                      </div>

                      <div class="btn-group">
                        <a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a>
                        <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
                      </div>

                      <div class="btn-group">
                        <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
                        <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
                      </div> -->
                    </div>

                    <div id="editor-four" class="editor-wrapper"></div>

                    <textarea name="option3" id="descr" style="display:none;"></textarea>
                    
                    <br/>
                    <div class="form-check">
                        <input class="form-check-input" name="correct" type="radio" value="3">
                        <label class="form-check-label" for="radio100">Correct</label>
                    </div>
                    <br />

                    <div class="ln_solid"></div>

                    
                  </div>
                </div>
              </div>

              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Option 4</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div id="alerts"></div>
                    <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-five">
                      <!-- <div class="btn-group">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                        </ul>
                      </div>

                      <div class="btn-group">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <li>
                            <a data-edit="fontSize 5">
                              <p style="font-size:17px">Huge</p>
                            </a>
                          </li>
                          <li>
                            <a data-edit="fontSize 3">
                              <p style="font-size:14px">Normal</p>
                            </a>
                          </li>
                          <li>
                            <a data-edit="fontSize 1">
                              <p style="font-size:11px">Small</p>
                            </a>
                          </li>
                        </ul>
                      </div>

                      <div class="btn-group">
                        <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
                        <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
                        <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
                        <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
                      </div>

                      <div class="btn-group">
                        <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
                        <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
                        <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
                        <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
                      </div>

                      <div class="btn-group">
                        <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
                        <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
                        <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
                        <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
                      </div>

                      <div class="btn-group">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
                        <div class="dropdown-menu input-append">
                          <input class="span2" placeholder="URL" type="text" data-edit="createLink" />
                          <button class="btn" type="button">Add</button>
                        </div>
                        <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
                      </div>

                      <div class="btn-group">
                        <a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a>
                        <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
                      </div>

                      <div class="btn-group">
                        <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
                        <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
                      </div> -->
                    </div>

                    <div id="editor-five" class="editor-wrapper"></div>

                    <textarea name="option4" id="descr" style="display:none;"></textarea>
                    <br/>
                    <div class="form-check">
                        <input class="form-check-input" name="correct" type="radio" value="4">
                        <label class="form-check-label" for="radio100">Correct</label>
                    </div>
                    <br />

                    <div class="ln_solid"></div>

                    
                  </div>
                </div>
              </div>            

              <input type="submit" name="submit" class="btn btn-primary"/>
            </form>

           


            

          </div>


          
        </div>
        <!-- /page content -->
<script>
  function AddQuestion(){
    var question = $('#editor-one').html();
    var option1 = $('#editor-two').html();
    var option2 = $('#editor-three').html();
    var option3 = $('#editor-four').html();
    var option4 = $('#editor-five').html();
    var answer = $('#editor-six').html();
    var chapter = <?php echo $this->uri->segment(3); ?>;
    var correct = $("input[name='correct']:checked").val();   

    $.ajax({
            url: '<?php echo base_url(); ?>home/add_questions_data',
            type: 'POST',
            data: {
                question: question,
                option1: option1,
                option2: option2,
                option3: option3,
                option4: option4,
                answer: answer,
                chapter: chapter,
                correct: correct
            },
            success: function(data){
              console.log(data);
              window.location.reload();
            },
        });

    return false;
  }
</script>
<?php require "includes/footer.php"; ?>