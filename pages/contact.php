<?php 
  /* Contact.php */
?>
<section id="contact-section" class="animated fadeInDown pt-120 mb-60">
	<div class="container section-text">
		<div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="section-text align-center mb-70 mb-xs-40">
                	<h2 class="section-title">Weitere Fragen?</h2>
                </div>
            </div>
        </div>
		<div class="row mb-60 mb-xs-40">
            <div class="col-md-8 col-md-offset-2">
                <div class="row">  
                    <!-- Phone -->
                    <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
                        <div class="contact-item">
                            <div class="ci-icon">
                                <i class="glyphicon glyphicon-earphone"></i>
                            </div>
                            <div class="ci-title font-alt">
                                Telefon
                            </div>
                            <div class="ci-text">
                                0173 34564646
                            </div>
                        </div>
                    </div>
                    <!-- End Phone -->
                    
                    <!-- Address -->
                    <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
                        <div class="contact-item">
                            <div class="ci-icon">
                                <i class="glyphicon glyphicon-map-marker"></i>
                            </div>
                            <div class="ci-title font-alt">
                                Standort
                            </div>
                            <div class="ci-text">
                                Köln
                            </div>
                        </div>
                    </div>
                    <!-- End Address -->
                    
                    <!-- Email -->
                    <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
                        <div class="contact-item">
                            <div class="ci-icon">
                                <i class="glyphicon glyphicon-envelope"></i>
                            </div>
                            <div class="ci-title font-alt">
                                Email
                            </div>
                            <div class="ci-text">
                                <a href="mailto:sami@kuchen.io">sami@kuchen.io</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Email -->    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form class="form contact-form" id="contact_form">
                    <div class="clearfix">
                        <div class="cf-left-col">
                            <!-- Name -->
                            <div class="form-group">
                                <input type="text" name="name" id="name" class="input-md round form-control" placeholder="Name" pattern=".{3,100}" required="">
                            </div>
                            
                            <!-- Email -->
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="input-md round form-control" placeholder="Email" pattern=".{5,100}" required="">
                            </div>
                        </div>
                        <div class="cf-right-col">
                            <!-- Message -->
                            <div class="form-group">                                            
                                <textarea name="message" id="message" class="input-md round form-control" style="height: 84px;" placeholder="Nachricht"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix">
                        <div class="cf-left-col">
                            <!-- Inform Tip -->                                        
                            <div class="form-tip pt-20">
                                <i class="glyphicon glyphicon-info-sign"></i>
                                Alle Felder sind Pflichtfelder und müssen ausgefüllt werden
                            </div>
                        </div>
                        <div class="cf-right-col">
                            <!-- Send Button -->
                            <div class="align-right pt-10">
                                <button class="submit_btn btn btn-mod btn-medium btn-round" id="submit_btn">Senden</button>
                            </div>
                        </div>
                    </div>
                    <div id="result"></div>
                </form>
            </div>
        </div>
	</div>
</section>