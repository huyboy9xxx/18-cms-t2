<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-13">
    <div class="container">
        <!-- SALE -->
        <div class="row">
            <div class="col-md-6"> 
                <div class="tab-content">
                <ul class="nav question">
                    <li><a data-toggle="pill" href="#menu1">SALE</a></li>
                </ul>
                    <div id="menu1" class="tab-pane fade in active">
                        <div class="panel-group">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#collapse1">I haven't received my item. What can
                                            I do?</a>
                                    </h4>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <p> Sed primis eu conubia erat ut nam vitae a habitant dui
                                        adipiscing a dignissim eu a ad venenatis. Non vivamus enim himenaeos porta id
                                        morbi montes ut sem scelerisque in litora id scelerisque consectetur eget cras
                                        hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.</p>
                                        <p>Non vivamus enim himenaeos porta id morbi montes ut sem scelerisque in litora id 
                                        scelerisque consectetur eget cras hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.</p>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="panel-group">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#collapse2">Ipsum ac erat cursus rutrum parturient a a nostra?</a>
                                    </h4>
                                </div>
                                <div id="collapse2" class="panel-collapse collapse">
                                <div class="panel-body">
                                        <p> Sed primis eu conubia erat ut nam vitae a habitant dui
                                        adipiscing a dignissim eu a ad venenatis. Non vivamus enim himenaeos porta id
                                        morbi montes ut sem scelerisque in litora id scelerisque consectetur eget cras
                                        hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.</p>
                                        <p>Non vivamus enim himenaeos porta id morbi montes ut sem scelerisque in litora id 
                                        scelerisque consectetur eget cras hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-group">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#collapse3">Tellus ridiculus non tempus laoreet
                                            nec diam eleifend id ullamcorper?</a>
                                    </h4>
                                </div>
                                <div id="collapse3" class="panel-collapse collapse">
                                <div class="panel-body">
                                        <p> Sed primis eu conubia erat ut nam vitae a habitant dui
                                        adipiscing a dignissim eu a ad venenatis. Non vivamus enim himenaeos porta id
                                        morbi montes ut sem scelerisque in litora id scelerisque consectetur eget cras
                                        hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.</p>
                                        <p>Non vivamus enim himenaeos porta id morbi montes ut sem scelerisque in litora id 
                                        scelerisque consectetur eget cras hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-group">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#collapse4">Ad a dui a lacinia nec nec non volutpat?</a>
                                    </h4>
                                </div>
                                <div id="collapse4" class="panel-collapse collapse">
                                <div class="panel-body">
                                        <p> Sed primis eu conubia erat ut nam vitae a habitant dui
                                        adipiscing a dignissim eu a ad venenatis. Non vivamus enim himenaeos porta id
                                        morbi montes ut sem scelerisque in litora id scelerisque consectetur eget cras
                                        hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.</p>
                                        <p>Non vivamus enim himenaeos porta id morbi montes ut sem scelerisque in litora id 
                                        scelerisque consectetur eget cras hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-group">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#collapse5">Dui nisi in cum augue adipiscing nibh taciti mollis condimentum risus?</a>
                                    </h4>
                                </div>
                                <div id="collapse5" class="panel-collapse collapse">
                                <div class="panel-body">
                                        <p> Sed primis eu conubia erat ut nam vitae a habitant dui
                                        adipiscing a dignissim eu a ad venenatis. Non vivamus enim himenaeos porta id
                                        morbi montes ut sem scelerisque in litora id scelerisque consectetur eget cras
                                        hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.</p>
                                        <p>Non vivamus enim himenaeos porta id morbi montes ut sem scelerisque in litora id 
                                        scelerisque consectetur eget cras hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-group">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#collapse6">Tellus ridiculus non tempus laoreet nec diam eleifend id ullamcorper?</a>
                                    </h4>
                                </div>
                                <div id="collapse6" class="panel-collapse collapse">
                                <div class="panel-body">
                                        <p> Sed primis eu conubia erat ut nam vitae a habitant dui
                                        adipiscing a dignissim eu a ad venenatis. Non vivamus enim himenaeos porta id
                                        morbi montes ut sem scelerisque in litora id scelerisque consectetur eget cras
                                        hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.</p>
                                        <p>Non vivamus enim himenaeos porta id morbi montes ut sem scelerisque in litora id 
                                        scelerisque consectetur eget cras hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="menu2" class="tab-pane fade ">
                    <div class="panel-group">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#collapse7">Do you understand. What can
                                            I do?</a>
                                    </h4>
                                </div>
                                <div id="collapse7" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <p> Sed primis eu conubia erat ut nam vitae a habitant dui
                                        adipiscing a dignissim eu a ad venenatis. Non vivamus enim himenaeos porta id
                                        morbi montes ut sem scelerisque in litora id scelerisque consectetur eget cras
                                        hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.</p>
                                        <p>Non vivamus enim himenaeos porta id morbi montes ut sem scelerisque in litora id 
                                        scelerisque consectetur eget cras hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.</p>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="panel-group">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#collapse8">Ipsum ac erat cursus rutrum parturient a a nostra?</a>
                                    </h4>
                                </div>
                                <div id="collapse8" class="panel-collapse collapse">
                                <div class="panel-body">
                                        <p> Sed primis eu conubia erat ut nam vitae a habitant dui
                                        adipiscing a dignissim eu a ad venenatis. Non vivamus enim himenaeos porta id
                                        morbi montes ut sem scelerisque in litora id scelerisque consectetur eget cras
                                        hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.</p>
                                        <p>Non vivamus enim himenaeos porta id morbi montes ut sem scelerisque in litora id 
                                        scelerisque consectetur eget cras hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-group">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#collapse9">Tellus ridiculus non tempus laoreet
                                            nec diam eleifend id ullamcorper?</a>
                                    </h4>
                                </div>
                                <div id="collapse9" class="panel-collapse collapse">
                                <div class="panel-body">
                                        <p> Sed primis eu conubia erat ut nam vitae a habitant dui
                                        adipiscing a dignissim eu a ad venenatis. Non vivamus enim himenaeos porta id
                                        morbi montes ut sem scelerisque in litora id scelerisque consectetur eget cras
                                        hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.</p>
                                        <p>Non vivamus enim himenaeos porta id morbi montes ut sem scelerisque in litora id 
                                        scelerisque consectetur eget cras hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-group">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#collapse10">Ad a dui a lacinia nec nec non volutpat?</a>
                                    </h4>
                                </div>
                                <div id="collapse10" class="panel-collapse collapse">
                                <div class="panel-body">
                                        <p> Sed primis eu conubia erat ut nam vitae a habitant dui
                                        adipiscing a dignissim eu a ad venenatis. Non vivamus enim himenaeos porta id
                                        morbi montes ut sem scelerisque in litora id scelerisque consectetur eget cras
                                        hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.</p>
                                        <p>Non vivamus enim himenaeos porta id morbi montes ut sem scelerisque in litora id 
                                        scelerisque consectetur eget cras hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-group">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#collapse11">Dui nisi in cum augue adipiscing nibh taciti mollis condimentum risus?</a>
                                    </h4>
                                </div>
                                <div id="collapse11" class="panel-collapse collapse">
                                <div class="panel-body">
                                        <p> Sed primis eu conubia erat ut nam vitae a habitant dui
                                        adipiscing a dignissim eu a ad venenatis. Non vivamus enim himenaeos porta id
                                        morbi montes ut sem scelerisque in litora id scelerisque consectetur eget cras
                                        hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.</p>
                                        <p>Non vivamus enim himenaeos porta id morbi montes ut sem scelerisque in litora id 
                                        scelerisque consectetur eget cras hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-group">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#collapse12">Tellus ridiculus non tempus laoreet nec diam eleifend id ullamcorper?</a>
                                    </h4>
                                </div>
                                <div id="collapse12" class="panel-collapse collapse">
                                <div class="panel-body">
                                        <p> Sed primis eu conubia erat ut nam vitae a habitant dui
                                        adipiscing a dignissim eu a ad venenatis. Non vivamus enim himenaeos porta id
                                        morbi montes ut sem scelerisque in litora id scelerisque consectetur eget cras
                                        hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.</p>
                                        <p>Non vivamus enim himenaeos porta id morbi montes ut sem scelerisque in litora id 
                                        scelerisque consectetur eget cras hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="menu3" class="tab-pane fade">
                    <div class="panel-group">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#collapse13">I don't know. What can
                                            I do?</a>
                                    </h4>
                                </div>
                                <div id="collapse13" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <p> Sed primis eu conubia erat ut nam vitae a habitant dui
                                        adipiscing a dignissim eu a ad venenatis. Non vivamus enim himenaeos porta id
                                        morbi montes ut sem scelerisque in litora id scelerisque consectetur eget cras
                                        hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.</p>
                                        <p>Non vivamus enim himenaeos porta id morbi montes ut sem scelerisque in litora id 
                                        scelerisque consectetur eget cras hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.</p>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="panel-group">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#collapse14">Ipsum ac erat cursus rutrum parturient a a nostra?</a>
                                    </h4>
                                </div>
                                <div id="collapse14" class="panel-collapse collapse">
                                <div class="panel-body">
                                        <p> Sed primis eu conubia erat ut nam vitae a habitant dui
                                        adipiscing a dignissim eu a ad venenatis. Non vivamus enim himenaeos porta id
                                        morbi montes ut sem scelerisque in litora id scelerisque consectetur eget cras
                                        hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.</p>
                                        <p>Non vivamus enim himenaeos porta id morbi montes ut sem scelerisque in litora id 
                                        scelerisque consectetur eget cras hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-group">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#collapse15">Tellus ridiculus non tempus laoreet
                                            nec diam eleifend id ullamcorper?</a>
                                    </h4>
                                </div>
                                <div id="collapse15" class="panel-collapse collapse">
                                <div class="panel-body">
                                        <p> Sed primis eu conubia erat ut nam vitae a habitant dui
                                        adipiscing a dignissim eu a ad venenatis. Non vivamus enim himenaeos porta id
                                        morbi montes ut sem scelerisque in litora id scelerisque consectetur eget cras
                                        hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.</p>
                                        <p>Non vivamus enim himenaeos porta id morbi montes ut sem scelerisque in litora id 
                                        scelerisque consectetur eget cras hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-group">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#collapse16">Ad a dui a lacinia nec nec non volutpat?</a>
                                    </h4>
                                </div>
                                <div id="collapse16" class="panel-collapse collapse">
                                <div class="panel-body">
                                        <p> Sed primis eu conubia erat ut nam vitae a habitant dui
                                        adipiscing a dignissim eu a ad venenatis. Non vivamus enim himenaeos porta id
                                        morbi montes ut sem scelerisque in litora id scelerisque consectetur eget cras
                                        hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.</p>
                                        <p>Non vivamus enim himenaeos porta id morbi montes ut sem scelerisque in litora id 
                                        scelerisque consectetur eget cras hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-group">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#collapse17">Dui nisi in cum augue adipiscing nibh taciti mollis condimentum risus?</a>
                                    </h4>
                                </div>
                                <div id="collapse17" class="panel-collapse collapse">
                                <div class="panel-body">
                                        <p> Sed primis eu conubia erat ut nam vitae a habitant dui
                                        adipiscing a dignissim eu a ad venenatis. Non vivamus enim himenaeos porta id
                                        morbi montes ut sem scelerisque in litora id scelerisque consectetur eget cras
                                        hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.</p>
                                        <p>Non vivamus enim himenaeos porta id morbi montes ut sem scelerisque in litora id 
                                        scelerisque consectetur eget cras hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-group">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#collapse18">Tellus ridiculus non tempus laoreet nec diam eleifend id ullamcorper?</a>
                                    </h4>
                                </div>
                                <div id="collapse18" class="panel-collapse collapse">
                                <div class="panel-body">
                                        <p> Sed primis eu conubia erat ut nam vitae a habitant dui
                                        adipiscing a dignissim eu a ad venenatis. Non vivamus enim himenaeos porta id
                                        morbi montes ut sem scelerisque in litora id scelerisque consectetur eget cras
                                        hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.</p>
                                        <p>Non vivamus enim himenaeos porta id morbi montes ut sem scelerisque in litora id 
                                        scelerisque consectetur eget cras hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="ask">
                    <h3 class="bol">Send Us An Email</h3>
                    <p class="lorem">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab neque fugiat ea a
                        repellat similique, tempora molestias id assumenda commodi?
                        Dolores aspernatur ex omnis, quas pariatur eveniet unde voluptates iusto!</p>
                    <div class="form-group ">
                        <label for="exampleInputEmail1">Your Name(required)</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Your Message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
                    </div>
                    <button type="button" class="btn">SUBMIT</button>
                </div>
            </div>
        </div>
    </div>
</div>