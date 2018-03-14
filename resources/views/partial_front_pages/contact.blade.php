
<section class="contact-form">
    <div class="container">
        <div class="row">
        	<div style="text-align:center" class=" dis-table-cell color-bg">
                            <h2 >Contact Table !</h2>
                        </div>
            <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                <div class="row">

                    <form class="contact-form" method="post" action="{{ route('contact.sendMessage')}}">
                        @csrf
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <input  name="name" type="text" class="form-control" id="name" required="required" placeholder="  Name">
                            </div>
                            <div class="form-group">
                                <input name="email" type="email" class="form-control" id="email" required="required" placeholder="  Email">
                            </div>
                            <div class="form-group">
                                <input name="subject" type="text" class="form-control" id="subject" required="required" placeholder="  Subject">
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <textarea name="message" type="text" class="form-control" id="message" rows="7" required="required" placeholder="  Message"></textarea>
                        </div>

                        <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                            <div class="text-center">
                                <button type="submit" id="submit" name="submit" class="btn btn-send">Contact </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="contact" class="contact">
    <div class="container-fluid color-bg">
        <div class="row dis-table">
            <div class="hidden-xs col-sm-6 dis-table-cell">
                <h4 class="section-title">Contact With us</h4>
            </div>
            <div class="col-xs-6 col-sm-6 dis-table-cell">
                <div class="section-content">
                    <p>Bank Colony, Block E, Savar-Dhaka</p>
                    <p>01977334558</p>
                    <p>it.knowledge4568@mail.com </p>
                </div>
            </div>
        </div>
        <div class="social-media">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <ul class="center-block">
                        <li><a href="https://www.facebook.com/monir.hossain.9693001" class="fb"></a></li>
                        <li><a href="https://twitter.com/Jibon60852128" class="twit"></a></li>
                        <li><a href="https://www.linkedin.com/in/monir-khokon-1312a3150/" class="link"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

