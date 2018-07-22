@extends('pages.master_resume')

@section('content')

<!-- Services Section -->
<?php //print_r($page['experience']);?>
<div class="container-fluid p-0">
      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
          <div class="my-auto">
            <h1 class="mb-0">  <?php echo $page['firstname'];?>
              <span class="text-primary"><?php echo $page['lastname'];?></span>
            </h1>
            <div class="subheading mb-5"><?php echo $page['address'];?>  <span><?php echo $page['mobileno'];?></span>
              <a href="mailto:name@email.com"><?php echo $page['email'];?></a>
            </div>
            <p class="mb-5">I am experienced in leveraging agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition.</p>
            <ul class="list-inline list-social-icons mb-0">
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
          </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="experience">
        <div class="my-auto">
          <h2 class="mb-5">Experience</h2>

          <?php echo $page['experience'];?>

          <!-- <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
              <h3 class="mb-0">Web Developer</h3>
              <div class="subheading mb-3">Intelitec Solutions</div>
              <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.</p>
            </div>
            <div class="resume-date text-md-right">
              <span class="text-primary">December 2011 - March 2013</span>
            </div>
          </div> -->

          <!-- <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
              <h3 class="mb-0">Junior Application Developer</h3>
              <div class="subheading mb-3">Tri-e Marketing Sdn Bhd</div>
              <p>Analyse , design , develop , implement , evaluate the application development cycle of company e-commerce shopping site. Managing the data interaction of back end service of data processing.</p>
            </div>
            <div class="resume-date text-md-right">
              <span class="text-primary">September 2017 - Current</span>
            </div>
          </div>

          <div class="resume-item d-flex flex-column flex-md-row">
            <div class="resume-content mr-auto">
              <h3 class="mb-0">Web Developer</h3>
              <div class="subheading mb-3">Just Simple Sdn Bhd</div>
              <p>Develop and maintain company content management system which include of customer's custom requirement to meet their business needs.</p>
            </div>
            <div class="resume-date text-md-right">
              <span class="text-primary">June 2017 - August 2017</span>
            </div>
          </div> -->

        </div>

      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="education">
        <div class="my-auto">
          <h2 class="mb-5">Education</h2>

          <!-- <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
              <h3 class="mb-0">Segi University partner with University of Greenwich</h3>
              <div class="subheading mb-3">Bachelor of Computing</div>
              <div>Computing - System Development Track</div>
              <p>GPA: looking forward to get free ptptn waiver</p>
            </div>
            <div class="resume-date text-md-right">
              <span class="text-primary">2018 - 2021</span>
            </div>
          </div>

            <div class="resume-item d-flex flex-column flex-md-row mb-5">
              <div class="resume-content mr-auto">
                <h3 class="mb-0"></h3>
                <div class="subheading mb-3">Higher National Diploma in Computing</div>
                <div>Computer Science - Web Development Track</div>
                <p>GPA: 3.49</p>
              </div>
              <div class="resume-date text-md-right">
                <span class="text-primary">2014 - 2017</span>
              </div>
          </div>

          <div class="resume-item d-flex flex-column flex-md-row">
            <div class="resume-content mr-auto">
              <h3 class="mb-0">MRSM Kubang Pasu</h3>
              <div class="subheading mb-3">Sijil Pelajaran Malaysia</div>
              <p>Result : 5A 2B 1C</p>
            </div>
            <div class="resume-date text-md-right">
              <span class="text-primary">2009 - 2013</span>
            </div>
          </div> -->
          <?php echo $page['education'];?>
        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="skills">
        <div class="my-auto">
          <h2 class="mb-5">Skills</h2>

          <div class="subheading mb-3">Programming Languages &amp; Tools</div>
          <ul class="list-inline list-icons">
            <li class="list-inline-item">
              <i class="devicons devicons-html5"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-css3"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-javascript"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-jquery"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-sass"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-less"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-bootstrap"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-wordpress"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-grunt"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-gulp"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-npm"></i>
            </li>
          </ul>

          <div class="subheading mb-3">Workflow</div>
          <ul class="fa-ul mb-0">
            <li>
              <i class="fa-li fa fa-check"></i>
              Mobile-First, Responsive Design</li>
            <li>
              <i class="fa-li fa fa-check"></i>
              Cross Browser Testing &amp; Debugging</li>
            <li>
              <i class="fa-li fa fa-check"></i>
              Cross Functional Teams</li>
            <li>
              <i class="fa-li fa fa-check"></i>
              Agile Development &amp; Scrum</li>
          </ul>
        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="interests">
        <div class="my-auto">
          <h2 class="mb-5">Interests</h2>
          <!-- <p>Apart from being a web developer, I enjoy most of my time being outdoors. </p>
          <p class="mb-0">When forced indoors, I follow a number of sci-fi and fantasy genre movies and television shows, I am an aspiring chef, and I spend a large amount of my free time exploring the latest technolgy advancements in the front-end web development world.</p>
           -->
           <?php echo $page['interest'];?>
        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="awards">
        <!-- <div class="my-auto">
          <h2 class="mb-5">Awards &amp; Certifications</h2>
          <ul class="fa-ul mb-0">
            <li>
              <i class="fa-li fa fa-trophy text-warning"></i>
              Google Analytics Certified Developer</li>
            <li>
              <i class="fa-li fa fa-trophy text-warning"></i>
              Mobile Web Specialist - Google Certification</li>
            <li>
              <i class="fa-li fa fa-trophy text-warning"></i>
              1<sup>st</sup>
              Place - University of Colorado Boulder - Emerging Tech Competition 2009</li>
            <li>
              <i class="fa-li fa fa-trophy text-warning"></i>
              1<sup>st</sup>
              Place - University of Colorado Boulder - Adobe Creative Jam 2008 (UI Design Category)</li>
            <li>
              <i class="fa-li fa fa-trophy text-warning"></i>
              2<sup>nd</sup>
              Place - University of Colorado Boulder - Emerging Tech Competition 2008</li>
            <li>
            <li>
              <i class="fa-li fa fa-trophy text-warning"></i>
              1<sup>st</sup>
              Place - James Buchanan High School - Hackathon 2006</li>
            <li>
              <i class="fa-li fa fa-trophy text-warning"></i>
              3<sup>rd</sup>
              Place - James Buchanan High School - Hackathon 2005</li>
          </ul>
        </div> -->
      </section>


</div>

@endsection