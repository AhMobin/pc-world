@extends('layouts.app')

@section('content')

<section class="support__showcase" style="background: url('{{ asset("public/frontend/images/support/support-bg.jpg") }}');
    background-size: cover;
    background-position: center center;
    height: 80vh;">

    <div class="container sup__content">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-10 col-xs-12">
                <h2 style="color: #6c757d; line-height: 2.2rem">SUPPORT</h2>
                <h5 class="supp_subhead" style="line-height: 1.5rem">THE KITE coustomers are got supported for 24/7 via online & available office hours.</h5>
                <br>
                <p class="supp_content">THE KITE support is provided by talented in-house, BD based support agents that are hand-picked to provide our customers with a fantastic experience. Whether it's a simple question, or a failed graphics card, you can expect no more than a blip in downtime with our unmatched level of support and knowledge.</p>
            </div>
        </div>
    </div>
</section>

    <section class="support_feature mt--40">
        <div class="ptb--30">
            <h2 style="font-weight: bold;font-size: 2.5rem; text-align: center;">Our Features</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="product__wrap clearfix">
                    <!-- Start Single Category -->
                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 sup_con">
                        <div class="support__icon"><i class="fa fa-info-circle"></i></div>
                        <div class="sup_feature_heading text-center">Lifetime phone and online service guarantee</div>
                        <div class="sup_feature_content">
                            <p class="sup_content">THE KITE support is provided by talented in-house, BD based support agents that are hand-picked to provide our customers with a fantastic experience. Whether it's a simple question, or a failed graphics card, you can expect no more than a blip in downtime with our unmatched level of support and knowledge.</p>

                            <h5 style="padding-top: 10px">THE KITE Lifetime Online Support</h5>
                            <p class="support_mail"><a href="#">support@thekite.com</a></p>

                            <h5 style="padding-top: 10px">24/7 Telephone Support</h5>
                            <p class="support_phone">+880-99******</p>
                            <p class="support_phone">+880-17********</p>
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 sup_con">
                        <div class="support__icon"><i class="fa fa-info-circle"></i></div>
                        <div class="sup_feature_heading text-center">Every customer has their own dedicated support team</div>
                        <div class="sup_feature_content">
                            <p class="sup_content">The KITE works for you, you're the boss. You won't be dealing with anonymous overseas agents that don't know you or what your system specs are. This dedicated team consists of the same knowledgeable veterans and meticulous systems integrators that build and test our units in THE KITE factory in Dhanmondi Dhaka. Personalized service doesn't get any better.</p>
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 sup_con">
                        <div class="support__icon"><i class="fa fa-info-circle"></i></div>
                        <div class="sup_feature_heading text-center">Lifetime labor for all your service and upgrade needs</div>
                        <div class="sup_feature_content">
                            <p class="sup_content">True partners stay together through all of life's challenges and we all know hardware is always changing and advancing for the better. Thus THE KITE provides labor free work for the life of your custom built gaming or professional workstation PCs.</p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
    </section>



    <section class="mtb--40">
        <div class="ptb--50">
            <h2 style="font-weight: bold;font-size: 2.5rem; text-align: center;">FAQs</h2>
        </div>

        <div class="faqs">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-8 col-sm-10 col-xs-10">

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading1">
                                <h4 class="panel-title mb-0 ptb--10">
                                    <a class="collapsed originpcred" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                    My system is out of warranty do I still get any support?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7">
                                <div class="panel-body">
                                    <p class="mb-0">THE KITE provides free life time support. So even if your warranty has expired you may call or email our support staff for assistance.

</p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab">
                                <h4 class="panel-title mb-0 ptb--10">
                                    <a class="collapsed originpcred" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    I would like to upgrade my system does THE KITE buy back my old components?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse" role="tabpane2" aria-labelledby="heading7">
                                <div class="panel-body">
                                    <p class="mb-0">THE KITE does not buy back used components unless you purchased the Evolve System Upgrade Service at the time of purchase for more details see Terms & Conditions

</p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab">
                                <h4 class="panel-title mb-0 ptb--10">
                                    <a class="collapsed originpcred" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    Is it possible to purchase an extended warranty?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7">
                                <div class="panel-body">
                                    <p class="mb-0">You may upgrade the warranty within the first thirty days of purchase
</p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab">
                                <h4 class="panel-title mb-0 ptb--10">
                                    <a class="collapsed originpcred" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    Do I have to pay for shipping for warranty repair if I live outside the Bangladesh?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7">
                                <div class="panel-body">
                                    <p class="mb-0">International customers are responsible for all charges relating to shipping of any replacements part or system needing repair.</p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab">
                                <h4 class="panel-title mb-0 ptb--10">
                                    <a class="collapsed originpcred" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                    How often should I refill my THE KITE Liquid Cooling Systems?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7">
                                <div class="panel-body">
                                    <p class="mb-0">The cooling system will not require constant refills. The liquid within the reservoir should be above the halfway point never at the bottom of the reservoir.</p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab">
                                <h4 class="panel-title mb-0 ptb--10">
                                    <a class="collapsed originpcred" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                    Where do I download my video drivers NVIDIA / AMD?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7">
                                <div class="panel-body">
                                    <ol class="mb-0">
                                        <li>You may download the NVIDIA video drivers from http://www.nvidia.com/Download/index.aspx?lang=en-us make sure to select the proper video card series.</li>
                                        <li>You may download the AMD video drivers from http://support.amd.com/us/Pages/AMDSupportHub.aspx make sure to select the proper video card series.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
