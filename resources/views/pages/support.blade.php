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
                <h5 class="supp_subhead" style="line-height: 1.5rem">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, nulla.</h5>
                <br>
                <p class="supp_content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium dignissimos ducimus eaque et eveniet fugiat modi nihil odit officiis quidem sapiente soluta tempora, tenetur vel! Lorem ipsum dolor sit amet.</p>
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
                            <p class="sup_content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam at debitis dolor dolore dolorem, eveniet facilis fugiat fugit inventore, labore laudantium magnam natus odio quaerat quia quibusdam quo recusandae, saepe sequi velit! A alias corporis cum dignissimos fugit inventore labore minus odio possimus quam sed tempore, voluptatem. Assumenda, at cum dolores ea, eum excepturi facere illum iure maiores minima numquam, quasi quisquam sed! Aspernatur.</p>

                            <h5 style="padding-top: 10px">ORIGIN Lifetime Online Support</h5>
                            <p class="support_mail"><a href="mailto::support@website.com">support@website.com</a></p>

                            <h5 style="padding-top: 10px">24/7 Telephone Support</h5>
                            <p class="support_phone">0178451471</p>
                            <p class="support_phone">0178451471</p>
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 sup_con">
                        <div class="support__icon"><i class="fa fa-info-circle"></i></div>
                        <div class="sup_feature_heading text-center">Lifetime phone and online service guarantee</div>
                        <div class="sup_feature_content">
                            <p class="sup_content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam at debitis dolor dolore dolorem, eveniet facilis fugiat fugit inventore, labore laudantium magnam natus odio quaerat quia quibusdam quo recusandae, saepe sequi velit! A alias corporis cum dignissimos fugit inventore labore minus odio possimus quam sed tempore, voluptatem. Assumenda, at cum dolores ea, eum excepturi facere illum iure maiores minima numquam, quasi quisquam sed! Aspernatur, necessitatibus quidem. Accusamus assumenda consectetur cumque, deserunt.</p>
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 sup_con">
                        <div class="support__icon"><i class="fa fa-info-circle"></i></div>
                        <div class="sup_feature_heading text-center">Lifetime phone and online service guarantee</div>
                        <div class="sup_feature_content">
                            <p class="sup_content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam at debitis dolor dolore dolorem, eveniet facilis fugiat fugit inventore, labore laudantium magnam natus odio quaerat quia quibusdam quo recusandae, saepe sequi velit! A alias corporis cum dignissimos fugit inventore labore minus odio possimus quam sed tempore, voluptatem. Assumenda, at cum dolores.</p>
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
                                        Do I need to refill my Origin FROSTBYTE Sealed Liquid Cooling Systems?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7">
                                <div class="panel-body">
                                    <p class="mb-0">The sealed systems do not require any refilling.</p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab">
                                <h4 class="panel-title mb-0 ptb--10">
                                    <a class="collapsed originpcred" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                        Do I need to refill my Origin FROSTBYTE Sealed Liquid Cooling Systems?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse" role="tabpane2" aria-labelledby="heading7">
                                <div class="panel-body">
                                    <p class="mb-0">The sealed systems do not require any refilling.</p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab">
                                <h4 class="panel-title mb-0 ptb--10">
                                    <a class="collapsed originpcred" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                        Do I need to refill my Origin FROSTBYTE Sealed Liquid Cooling Systems?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7">
                                <div class="panel-body">
                                    <p class="mb-0">The sealed systems do not require any refilling.</p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab">
                                <h4 class="panel-title mb-0 ptb--10">
                                    <a class="collapsed originpcred" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                        Do I need to refill my Origin FROSTBYTE Sealed Liquid Cooling Systems?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7">
                                <div class="panel-body">
                                    <p class="mb-0">The sealed systems do not require any refilling.</p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab">
                                <h4 class="panel-title mb-0 ptb--10">
                                    <a class="collapsed originpcred" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                        Do I need to refill my Origin FROSTBYTE Sealed Liquid Cooling Systems?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7">
                                <div class="panel-body">
                                    <p class="mb-0">The sealed systems do not require any refilling.</p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab">
                                <h4 class="panel-title mb-0 ptb--10">
                                    <a class="collapsed originpcred" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                        Do I need to refill my Origin FROSTBYTE Sealed Liquid Cooling Systems?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7">
                                <div class="panel-body">
                                    <p class="mb-0">The sealed systems do not require any refilling.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
