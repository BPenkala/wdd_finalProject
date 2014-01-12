<section>
    <div class="row">
        <div class="large-12 columns">
            <h2>Create a Project</h2>
            <p>* Denotes Required Field</p>
        </div>
    </div>

    <!-- SECTION 1 - TITLE -->
    <?php echo form_open('build/create');?>
    <div class="row">
        <div class="large-12 columns">
            <span class="number left">1</span>
            <h3>Project Title *</h3>
        </div>
        <div class="large-1 columns"></div>
        <div class="large-10 large-centered columns">
            <div class="row">
                <div class="large-8 columns">
                    <input type="text" name="project_title" id="project_title" placeholder="HoatziNest - Ideas and Team building platform for web..."/>
                </div>
                <div class="large-4 columns">
                    <p>Example: Real-time Code Editor</p>
                    <p>Example: Mobile App Development</p>
                </div>
            </div>
        </div>
        <div class="large-1 columns"></div>
    </div>


    <!-- SECTION 2 - DETAILS-->
    <div class="row">
        <div class="large-12 columns">
            <span class="number left">2</span>
            <h3>Project Details</h3>
        </div>
        <div class="large-1 columns"></div>
        <div class="large-10 large-centered columns textbox">
            <div class="row">
                <div class="large-8 columns left">
                    <span>This project team will need members with expertise in the following areas:</span>
                    <p>Choose one or more*</p>
                </div>

            </div>

            <div class="row">
                <div class="large-8 columns">
                    <div class="row">
                        <div class="large-4 columns panel panelLightGray">
                            <ul>
                                <li><input id="developers" type="checkbox"/><label for="developers">Developers</label></li>
                                <li><input id="Engineers" type="checkbox"/><label for="Engineers">Engineers</label></li>
                                <li><input id="Managers" type="checkbox"/><label for="Managers">Project Managers</label></li>
                            </ul>
                        </div>
                        <div class="large-4 columns panel panelGray">
                            <ul>
                                <li><input id="Designers" type="checkbox"/><label for="Designers">Designers</label></li>
                                <li><input id="Directors" type="checkbox"/><label for="Directors">Art Directors</label></li>
                                <li><input id="Artists" type="checkbox"/><label for="Artists">Artists</label></li>
                            </ul>
                        </div>
                        <div class="large-4 columns panel panelDarkGray">
                            <ul>
                                <li><input id="Marketers" type="checkbox"/><label for="Marketers">Marketers</label></li>
                                <li><input id="Animators" type="checkbox"/><label for="Animators">Video/Animators</label></li>
                                <li><input id="Writers" type="checkbox"/><label for="Writers">Writers</label></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="large-8 columns">
                    <label for="project_what">What are you creating?</label>
                    <input type="text" id="project_what" name="project_what" size="9999"></input>
                </div>
            </div>

            <div class="row">
                <div class="large-8 columns">
                    <label for="project_why">Why are you creating this?</label>
                    <input type="text" id="project_why" name="project_why"></input>
                </div>
            </div>

            <div class="row">
                <div class="large-8 columns">
                    <label for="project_how">How can others help you?</label>
                    <input type="text" id="project_how" name="project_how"></input>
                </div>
            </div>

            <div class="row">
                <div class="large-8 columns">
                    <label for="project_goals">What are the main goals you wish to accomplish with this project?</label>
                    <input type="text" id="project_goals" name="project_goals"></input>
                </div>
                <div class="large-4 columns">
                    <p>Example: Build an open source community</p>
                    <p>Example: Launch web and mobile app together</p>
                </div>
            </div>

            <div class="row">
                <div class="large-8 columns">
                    <label for="project_repo">GitHub Repository (optional)</label>
                    <input id="project_repo" name="project_repo" type="text" placeholder="Project github url"/>
                </div>
            </div>


        </div>
        <div class="large-1 columns"></div>
    </div>
    <?php echo form_close(); ?>

    <!-- SECTION 3 - IMAGES -->
    
    <?php echo form_open_multipart('build/upload');?>
    <div class="row">
        <div class="large-12 columns">
            <span class="number left">3</span>
            <h3>Project Images</h3>
        </div>
        <div class="large-1 columns"></div>
        <div class="large-10 large-centered columns">
            <div class="row">
                <div class="large-8 columns">
                        <label for="file">Add Images...</label>
                        <input type="file" name="file" id="file"><br>
                        <input class="button secondary radius wide right" type="submit" name="submit" value="Submit">
                    <br/>

                </div>
            </div>
        </div>
        <div class="large-1 columns"></div>
    </div>
    
    <br/><br/>
<?php echo form_close(); ?>
</section>