<?php get_header(); ?>

<div class="max-width" style="margin-left: -15px;">
    <div class="row ">
        <div class="col-xs-12 ">
            <div id="carousel-generic" class="carousel slide border-bottom block-shadow" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-generic" data-slide-to="2"></li>
                    <li data-target="#carousel-generic" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <?php
                        $showCase = [
                            1 => [ link=>"/", src=>get_bloginfo('template_url')."/img/top1.jpg", title=>"top1" ],
                            2 => [ link=>"/", src=>get_bloginfo('template_url')."/img/top2.jpg", title=>"top2" ],
                            3 => [ link=>"/", src=>get_bloginfo('template_url')."/img/top3.jpg", title=>"top3" ],
                            4 => [ link=>"/", src=>get_bloginfo('template_url')."/img/top4.jpg", title=>"top4" ]
                        ];
                    ?>
                    <?php foreach($showCase as $iKey=>$iValue) : ?>
<div class="item <?php if ($iKey==1) echo 'active'; ?>" >
    <a href="<?php echo $iValue["link"] ?>"><img src="<?php echo $iValue["src"] ?>" style="width:970px;height:300px;"> </a>
    <div class="carousel-caption">
        <?php echo $iValue["title"] ?>
    </div>
</div>
                    <?php endforeach ?>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div> <!-- end row of case show -->

    <div class="row " style="margin-top: 10px;">
        <div class="col-xs-8">

            {% for iGridItem in gridShowList %}
            {% if forloop.counter < 3 %}
            <div class="col-xs-6 topgrey-background" style="padding-top: 10px;">
                <div class="block block-light block-center block-shadow border-allthick">
                    <h4 class="heading-primary"><a href="{{ iGridItem.link }}"> {{ iGridItem.title }} </a> </h4>
                    <a href="{{ iGridItem.link }}"><img class="img-thumbnail" src="{{ iGridItem.exlink }}" style="width:240px;height:135px;"></a>
                    <p> {{ iGridItem.remark|safe }}</p>
                </div>
            </div>
            {% else %}
            {% if forloop.counter == 2 %} <div class="col-xs-12" style="background-color: white; height:5px;"> &nbsp; </div>
            {% endif %}

            <div class="col-xs-4 topgrey-background"  style="padding-top: 10px;">
                <div class="block block-light border-allthick block-center block-shadow">
                    <a href="{{ iGridItem.link }}"><img src="{{ iGridItem.exlink }}" style="width:150px;height:120px;margin-bottom: 15px;"
                                                        class="pull-left img-circle img-responsive"></a>
                    <p> {{ iGridItem.remark|safe }} </p>
                </div>
            </div>

            {% endif %}
            {% endfor %}

        </div>

        <div class="col-xs-4" style="padding-top:8px;">
            <div class="tab tab-primary border-all block-shadow" role="tabpanel" style="min-height: 190px;">
                <ul id="myTab" class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active" ><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">{{ rightBarList.0.title }}</a></li>
                    <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">{{ rightBarList.1.title }}</a></li>
                    <li role="presentation"><a href="#contact" role="tab" id="contact-tab" data-toggle="tab" aria-controls="contact">{{ rightBarList.2.title }}</a></li>
                </ul>

                <div id="myTabContent" class="tab-content" style="padding: 20px;border-top:1px solid lightgrey;">
                    <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                        <ul class="list list-feature" style="padding-top: -5px; font-size: 85%; line-height: 1.5em;">
                            {% for barGet1List in rightBarGet1List %}
                            <li style="height:26px;"> <i class="glyphicon glyphicon-ok primary-color"></i> <span>
              <a href ="{{  rightBarList.0.link }}?reqid={{ barGet1List.id }}">{{ barGet1List.title|truncatechars:20 }}</a> </span> </li>
                            {% endfor %}

                        </ul>

                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
                        {% for barGet2List in rightBarGet2List %}
                        <li style="height:26px;"> <i class="glyphicon glyphicon-ok primary-color"></i> <span>
              <a href ="{{  rightBarList.1.link }}?reqid={{ barGet2List.id }}">{{ barGet2List.title|truncatechars:20 }}</a> </span> </li>
                        {% endfor %}
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="contact" aria-labelledby="profile-tab">
                        <p> {{ rightBarList.2.remark|safe }} </p>
                    </div>
                </div>
            </div>
            <br>
            <div class="block block-primary-head no-pad border-allthick block-shadow block-light">
                <h5><i class="glyphicon glyphicon-play-circle color-primary"> </i> {{ rightBarList.3.title }} </h5>
                <div class="block-content">
                    <iframe width="272" height="172" src="{{ rightBarList.3.exlink }}"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row" >
    <footer class="footer-main">
        <div class="col-xs-4 col-xs-offset-4" style="text-align: center;">
            <ul> 网站备案号：{{ renderVal.webrecord }} </ul>

            <ul>  2015 </ul>

        </div>
    </footer>
</div> <!-- row -->
</div>

</body>
</html>