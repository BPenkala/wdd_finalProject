<section class="cta">
    <div class="row">
        <div class="large-12 columns text-center">
            <h2>Let's Build Something!</h2>
            <h5>Post your Idea, and build a Team</h5>
            <a href="<?php echo base_url();?>index.php/build" id="cta-btn" class="button primary radius wide bold">+ Start Your Idea</a>
        </div>
    </div>
</section>

<!-- Mid Content -->
<section class="cta2">

    <!-- Video Player -->
    <div class="row">
        <div class="large-8 large-centered columns">
            <h1 class="text-center">
                <img class="video" src="assets/img/videoplayer.jpg" alt="Get to know HoatziNest">
            </h1>

        </div>
    </div>

    <!-- Message -->
    <div class="row">
        <div class="large-12 columns text-center">
            <br/><br/>
            <h3>Crafting ideas and finding the right team to make it happen has never been easier</h3>
            <br/><br/>
        </div>
    </div>

    <!-- 4 Steps -->
    <div class="row">
        <div class="large-12 columns">
            <div class="row collapse">
                <div class="large-12 columns collapse">
                    <img class="left" src="assets/img/signup.png" alt="sign up">
                    <h5>Sign Up!</h5>
                    <p>It's 100% free.</p>
                    <p>This is your first step to make your ideas happen!</p>
                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="large-2 columns"></div>
        <div class="large-10 columns">
            <div class="row collapse">
                <div class="large-12 columns collapse">
                    <img class="left" src="assets/img/idea.png" alt="Post idea">
                    <h5>Post Your Project Idea</h5>
                    <p>Whether it's an online game concept, a mobile app,</p>
                    <p>or a new web application, this is your place to start.</p>
                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="large-4 columns"></div>
        <div class="large-8 columns">
            <div class="row collapse">
                <div class="large-12 columns collapse">
                    <img class="left" src="assets/img/team.png" alt="Build team">
                    <h5>Build the Dream Team</h5>
                    <p>People interested in similar ideas can help</p>
                    <p>each other start amazing projects together.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="large-6 columns"></div>
        <div class="large-6 columns">
            <div class="row collapse">
                <div class="large-12 columns collapse">
                    <img class="left" src="assets/img/launch.png" alt="Launch project">
                    <h5>Launch the Project</h5>
                    <p>It's exciting to see your idea executed</p>
                    <p>by skilled people. We'll showcase them!</p>
                </div>
            </div>
        </div>
    </div>

    <br/><br/>
</section>



<!-- Featured Projects -->
<section class="cta3">
    <div class="row collapse">
        <div class="large-8 columns collapse">
            <br/><br/>
            <h4>Featured Projects</h4>
            <br/><br/>


            <!-- Project #1-->
            <?php
            foreach ($rows as $r){
                $id = $r->project_id;
            
            echo "
                
            <div class='row collapse'>
                <div class='large-3 column'>
                    <a href='project.php'><img class='left' src='assets/img/proj1.jpg' alt='Project img'></a>
                </div>

                <div class='large-9 columns collapse'>
                    <a href='project.php'><h4>$r->project_title</h4></a>
                    <p class='left'><strong>Team Needs:</strong></p>
                    <ul class='inline-list'>
                        <li><p>....</p></li>
                        <li><p>....</p></li>
                    </ul>
                    <p>$r->project_what</p>
                    <p><span>Team of #</span></p>
                </div>
                <hr/>
            </div>";
            
            } ?>
            
        </div> <!-- End Projects -->

        <!-- New Members panel-->
        <div class="large-4 columns">
            <div class="row">
                <div class="large-2 columns"></div>
                <div class="large-8 columns large-centered panelGray">
                    <h6>New members looking to team up</h6>
                </div>
                <div class="large-2 columns"></div>
            </div>
            <div class="row">
                <div class="large-2 columns"></div>
                <div class="large-8 columns large-centered panelWhite">

                    <!-- Team Member #1 -->
                    <div class="row ">
                        <div class="large-3 column">
                            <img class="left" src="assets/img/user.png" alt="user img">
                        </div>

                        <div class="large-9 columns ">

                            <p><strong>Bryan Penkala</strong></p>
                            <p><span>Orlando, FL</span></p>

                        </div>
                    </div>

                    <!-- Team Member #2 -->
                    <div class="row ">
                        <div class="large-3 column">
                            <img class="left" src="assets/img/user.png" alt="user img">
                        </div>

                        <div class="large-9 columns ">

                            <p><strong>Enok Madrid</strong></p>
                            <p><span>Las Vegas, NV</span></p>

                        </div>
                    </div>

                    <!-- Team Member #3 -->
                    <div class="row collapse">
                        <div class="large-3 column">
                            <img class="left" src="assets/img/user.png" alt="user img">
                        </div>

                        <div class="large-9 columns ">

                            <p><strong>John Neilsen</strong></p>
                            <p><span>Los Angeles, CA</span></p>

                        </div>
                    </div>

                    <!-- Team Member #4 -->
                    <div class="row collapse">
                        <div class="large-3 column">
                            <img class="left" src="assets/img/user.png" alt="user img">
                        </div>

                        <div class="large-9 columns ">

                            <p><strong>Chris Potts</strong></p>
                            <p><span>Chicago, IL</span></p>

                        </div>
                    </div>


                </div>
                <div class="large-2 columns"></div>
            </div>

        </div>

        <br/>

        <!-- Featured article panel-->
        <div class="large-4 columns right">
            <div class="row">
                <div class="large-2 columns"></div>
                <div class="large-8 column large-centered panelGray">
                    <h6>Featured Article</h6>
                </div>
                <div class="large-2 columns"></div>
            </div>
            <div class="row">
                <div class="large-2 columns"></div>
                <div class="large-8 columns large-centered panelWhite">

                    <p class="text-center">
                        <img src="assets/img/foundation5.jpg" alt="article image"/>
                    </p>
                    <h6>Foundation 5 Released!</h6>
                    <time>21 November 2013</time>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium deleniti dicta distinctio dolor minus perspiciatis.</p>

                    <a href="#"><p class="text-right">12 comments</p></a>
                    <br/>

                </div>
                <div class="large-2 columns"></div>
            </div>
        </div>
        <br/><br/>

    </div>
</section>