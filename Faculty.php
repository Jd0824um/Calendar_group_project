<?php
session_start();
if (!isset($_SESSION["authenticated"])) {
  echo "<script> location.href='LoginPage.php'; </script>";
}
?>

<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
  <title>Faculty</title>
  <?php include 'styles.html'; ?>
  <style>
    .container {
      display: flex;
      align-items: center;
    }
    .faculty {
      padding: 50px 0 0 210px;
      margin-bottom: -75px;
    }
  </style>
</head>

<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
  <main>
    <div class="page-loader">
      <div class="loader">Loading...</div>
    </div>
    <?php include 'navbar.php'; ?>
    <div class="main">
      <h2 class="font-alt faculty">Faculty</h2>
      <section class="module">
        <div class="container">
          <div class="col-sm-3 col-md-3 col-lg-3">
            <div class="gallery-item">
              <img src="assets/images/teacher.jpg" alt="Mr. Green" />
            </div>
          </div>
          <div class="col-sm-9 col-md-9 col-lg-9">
            <div class="gallery-item">
              <h2 class="font-alt">Mr. Green</h2>
              <h4 class="font-alt mb-0">Orchestra</h4>
              <hr class="divider-w mt-10 mb-20">
              <p>Mr. Green has studied piano, guitar, voice and percussion through various schools, including School of The Arts High School and San Francisco State University, as well as piano lessons with jazz masters such as Mark Little, Smith Dobson, Carlos Federico, and currently John Calloway. He teaches all ages and truly believes that he's been teaching informally since his rock days as a teenager at age 15. Formally, he has been teaching privately for about ten years, and has been with New Mozart School since 2007. Also, he is a professional musician and has been playing with various groups for the last twelve years, including his own band, Mascabeza, and others such as Benny Belard's band, Avance, Los Rumberos, and many more.</p>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="col-sm-3 col-md-3 col-lg-3">
            <div class="gallery-item">
              <img src="assets/images/DenisPiano.png" alt="Mr. Evstruhin" />
            </div>
          </div>
          <div class="col-sm-9 col-md-9 col-lg-9">
            <div class="gallery-item">
              <h2 class="font-alt">Mr. Evstruhin</h2>
              <h4 class="font-alt mb-0">Piano</h4>
              <hr class="divider-w mt-10 mb-20">
              <p>Russian pianist Denis Evstuhin has earned international acclaim for his vibrant artistry, remarkable sound quality and brilliant virtuosity by audiences and critics alike. Denis has performed in major cities throughout Europe, Russia, and the USA. He has appeared on stages of the world's most prestigious venues, including Walt Disney Concert Hall in Los Angeles, the great Tchaikovsky and Rachmaninoff Halls in Moscow, the Mariinsky Theater and Philharmonic Halls in St. Petersburg, as well as Orchestra Hall in Minneapolis. Evstuhin appeared as a soloist with the Mariinsky Theater Orchestra, Minnesota Orchestra, San Diego Symphony, Fairbanks Symphony, and the Sioux City Symphony. Denis has earned prizes in a number of international competitions around the World. In 2010 Denis was a guest on Garrison Keillor's A Prairie Home Companion.</p>

              <p>Denis holds a B.M and M.M. from the St. Petersburg Conservatory. While in the USA, he received DMA degree in Piano Performance at the University of Minnesota (studio of A. Braginsky). Evstuhin has participated in master classes, performing for some of the most distinguished pianists of our time.</p>

              <p>After a successful performance at The Museum of Russian Art in Minneapolis in July 2009, Denis was invited to organize and serve as Artistic Director of Music at the Museum, a concert series featuring a wide range of Russian classics. Recent highlights include a performance with Osmo Vanska and Erin Keefe in Minneapolis and 2014-2015 US tour.</p>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="col-sm-3 col-md-3 col-lg-3">
            <div class="gallery-item">
              <img src="assets/images/AntonMelnichenko.png" alt="Mr. Melnichenko" />
            </div>
          </div>
          <div class="col-sm-9 col-md-9 col-lg-9">
            <div class="gallery-item">
              <h2 class="font-alt">Mr. Melnichenko</h2>
              <h4 class="font-alt mb-0">Piano</h4>
              <hr class="divider-w mt-10 mb-20">
              <p>Russian-born pianist Anton Melnichenko has been performing on several continents since his first solo recital at the age of twelve. His performances have always garnered him both public and critical acclaim. In addition to top prizes Melnichenko has received various special audience awards on numerous international competitions.</p>

              <p>A graduate of the prestigious Tchaikovsky Conservatory in Moscow, Anton has also received an Artist Diploma at Hamline University, as well as his Master's and Doctoral degrees in Piano Performance from the University of Minnesota, where he studied with Professor Alexander Braginsky.</p>

              <p> has earned top prizes in a number of international and national competitions, including first prizes at the International Competition "Citta di Fasano" (Italy), the Shubert Club Competition (USA), International Competition. The Art of 21st century (Ukraine), Gavrilin International Piano Competition (Russia), as well as the fourth prize at the V International Piano Competition in Andorra. He has also appeared on many television and radio stations in Russia, US and Europe, such as Minnesota Public Radio, Russia K Channel (Culture), Russian National Television and others, performing works by Bach, Mozart, Chopin, Tchaikovsky, and Shostakovich.</p>

              <p>Besides his solo career Anton Melnichenko is an established collaborative pianist and has been working with many instrumentalists and vocalists around the world. He is also a staff collaborative pianist at Hamline University.</p>

            </div>
          </div>
        </div>
        <div class="container">
          <div class="col-sm-3 col-md-3 col-lg-3">
            <div class="gallery-item">
              <img src="assets/images/JamesZabawa.png" alt="Mr. Zabawa-Martinez" />
            </div>
          </div>
          <div class="col-sm-9 col-md-9 col-lg-9">
            <div class="gallery-item">
              <h2 class="font-alt">Mr. Zabawa-Martinez</h2>
              <h4 class="font-alt mb-0">Violin</h4>
              <hr class="divider-w mt-10 mb-20">
              <p>James Zabawa-Martinez was born in Austin, TX and began his studies at the age of 11 in his middle school orchestra. When James was 14, he met violinist Jennifer Bourianoff from the Austin Symphony and began to study with her. Shortly after, he moved to Faribault, MN to attend Shattuck-St. Mary's Pre-Conservatory Program, where he studied with professor Sally O'Reilly. Mr. Zabawa-Martinez continued his studies with her through earning his bachelor's degree from the University of Minnesota. He also holds his master's degree at the University of Texas at Austin with professor Brian Lewis, and maintains an active teaching studio at Orpheus Academy of Music. Currently, he is pursuing a Doctoral degree at the University of Minnesota where he studies with professor Sally O'Reilly.</p>

              <p>James has performed in various master classes for teachers including Joseph Silverstein, Pamela Frank, Ani Kavafian,Angie Fuller, Yair Kless, Jonathan Magness, Vijay Gupta, Bruce Coppock, and many more. James has performed throughout Europe and North America as a soloist and chamber musician, and has participated in national-level competitions such as the Sphinx Competition, Saint Paul Chamber Competition, Music Teachers National Association, and more.</p>

            </div>
          </div>
        </div>
        <div class="container">
          <div class="col-sm-3 col-md-3 col-lg-3">
            <div class="gallery-item">
              <img src="assets/images/jasmineWei.png" alt="Mrs. Wei" />
            </div>
          </div>
          <div class="col-sm-9 col-md-9 col-lg-9">
            <div class="gallery-item">
              <h2 class="font-alt">Mrs. Wei</h2>
              <h4 class="font-alt mb-0">Cello</h4>
              <hr class="divider-w mt-10 mb-20">
              <p>Born in Taiwan, Jasmine Wei-Ting Chang started her musical studies at age of five. She has been pursuing her musical career in the USA since age of 15. Jasmine is the First Prize Winner of Musical Arts of Orange County Annual Audition held by American String Teachers association. She holds a Bachelors Degree from Jacob School of Music (Indiana University) where she studied with Emilio Colon as well as a Master of Music degree and Artist Diploma from the Frost School of Music (University of Miami) where she studied with Ross Harbaugh, as well as being awarded as a Henry Mancini Institute Fellow. Currently, she is pursuing her Doctorate in the Musical Arts with Professor Tanya Remenikova at the University of Minnesota.</p>

              <p>Jasmine has performed in various masterclass including world renowned Bernard Greenhouse, Peter Stumpf, Andre Emelianoff, Emanuel Grubber, Jeffery Solow, David Etheve, Crispin Campbell and Yehuda Hanani. She has also attended many world summer music festivals such as Moscow Conservatory Summer Festival, Summit Music Festival, Boston Youth Symphony Orchestra, Round Top Music Festival in Texas and Castleman Quartet Program (Fredonia & Lindfield).</p>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="col-sm-3 col-md-3 col-lg-3">
            <div class="gallery-item">
              <img src="assets/images/BrianBillion.png" alt="Mr. Billion" />
            </div>
          </div>
          <div class="col-sm-9 col-md-9 col-lg-9">
            <div class="gallery-item">
              <h2 class="font-alt">Mr. Billion</h2>
              <h4 class="font-alt mb-0">Piano</h4>
              <hr class="divider-w mt-10 mb-20">
              <p>Brian Billion is a top-prize winner at many national and international competitions, including 1st prize at the Lancaster International Piano Competition (2015), The 1st Catholic University of America International Piano Competition (2014), The Mu Phi Epsilon Scholarship Competition (2015), the Aberdeen Civic Orchestra Young Artists Concerto Competition (2009), and the 2nd Annual Grant Competition (2012).</p>

              <p>Mr. Billion began studying under Dr. Ivo Klatchev in 2012 at The Catholic University of America in Washington D.C. as the recipient of the Archdiocesan Scholarship, a full-tuition scholarship for university based on academic excellence. Upon graduation in 2016 he received the special award from the School of Music faculty for best undergraduate instrumentalist. In 2018 Mr. Billion completed his Masterâ€™s degree in piano performance at The Juilliard School in New York, studying with Hung-Kuan Chen. Currently Mr. Billion is pursuing his Doctorate in piano with Alexander Braginsky at University of Minnesota. He is also a Theory Teaching Assistant at UMN, teaching all four theory core classes to music majors.</p>

              <p>Brian has performed at such international venues as Carnegie Hall (Weill Hall), the Kennedy Center Millennium Stage, Lincoln Centerâ€™s Paul Hall and Peter J. Sharp Hall, the Cascais Cultural Center in Lisbon, Portugal, the Teatro Comunale Degli Industri in Grosseto, Italy, Mariahilferkirche in Vienna, Austria, The Smithsonian National Portrait Gallery in Washington, DC, among others. He has performed as a soloist with Orquestra de Camara de Cascais e Oeiras,the Aberdeen Symphony, and the Millersville University Orchestra.</p>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="col-sm-3 col-md-3 col-lg-3">
            <div class="gallery-item">
              <img src="assets/images/Anastasiya.png" alt="Mrs. Nyzkodub" />
            </div>
          </div>
          <div class="col-sm-9 col-md-9 col-lg-9">
            <div class="gallery-item">
              <h2 class="font-alt">Mrs. Nyzkodub</h2>
              <h4 class="font-alt mb-0">Clarinet and Piano</h4>
              <hr class="divider-w mt-10 mb-20">
              <p>Anastasiya Nyzkodub is Ukrainian-born clarinetist Anastasiya Nyzkodub is currently completing her Doctorate of Musical Arts degree at the University of Minnesota where she studies with professor Alexander Fiterstein. Prior to her DMA studies she also completed her Master's degree at the University of Minnesota. Ms. Nyzkodub received her Bachelor Degree in Clarinet Performance at Grand Valley State University in Michigan.</p>

              <p> coming to the US, Anastasiya studied clarinet with her father, Sergiy Nyzkodub at the College of Arts in Khanty-Mansiysk (Russia). She participated in a summer program New Names in Russia and played in a chamber ensemble Consone. While pursuing her Bachelor degree she played and toured with New Music Ensemble.</p>

              <p>In 2015 Ms. Nyzkodub received a First prize at the Thursday Musical Young Artist Competition. During past seasons she performed with Minnesota Fringe opera and Mankato Symphony. She was a semi-finalist of the William Byrd Young Artist Competition (2017).</p>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="col-sm-3 col-md-3 col-lg-3">
            <div class="gallery-item">
              <img src="assets/images/olga.png" alt="Mrs. Schlosser" />
            </div>
          </div>
          <div class="col-sm-9 col-md-9 col-lg-9">
            <div class="gallery-item">
              <h2 class="font-alt">Mrs. Schlosser</h2>
              <h4 class="font-alt mb-0">Voice</h4>
              <hr class="divider-w mt-10 mb-20">
              <p>Olga Schlosser is Russian-born Olga Schlosser started her musical education at the age of 6. After graduating from the Music School in Yekaterinburg, Russia, she continued her musical education at the Yekaterinburg Tchaikovsky Musical College. She has worked as a Soloist with Moscow's National Orchestra and has been involved in Music ministry at churches in both Russia and the US.</p>

              <p>In her teaching Olga Schlosser focuses on helping her students to find their unique voice as well as to develop stage confidence, musical style, and artistic potential.</p>

            </div>
          </div>
        </div>
        <div class="container">
          <div class="col-sm-3 col-md-3 col-lg-3">
            <div class="gallery-item">
              <img src="assets/images/stella.png" alt="Mrs. Sokolovsky" />
            </div>
          </div>
          <div class="col-sm-9 col-md-9 col-lg-9">
            <div class="gallery-item">
              <h2 class="font-alt">Mrs. Sokolovsky</h2>
              <h4 class="font-alt mb-0">Piano</h4>
              <hr class="divider-w mt-10 mb-20">
              <p>Stella Sokolovsky has begun studying piano at age 6 and was accepted to the Music Lyceum at the State Conservatory in Minsk, Belarus. At the age 11 she started performing in major cities throughout Belarus, Sweden,Norway, Finland, Great Britain, Canada and the USA, performing works by J.S. Bach, W.A. Mozart, Chopin, Liszt,Medtner, Liadov, Tchaikovsky, Rimsky-Korsakov, Rachmaninoff and others.</p>

              <p>Stella's musical education culminated at the State Academy of Music in Minsk, Belarus. In a summer of 1994 she had participated at the Interlochen Art Camp in Michigan, taking Master's level courses of piano and organ performance. In 1998 Sokolovsky participated at master-class of the celebrated pianist Daniel Pollack. She has also earned several honorable diplomas from various International piano competitions in Europe.</p>

              <p>Her teaching experience has begun with coaching young students at the Belarusian State Academy of Music. For several years Sokolovsky has successfully taught piano for both young and adult students at Music for everyone School and the Millennium Center for performing arts in Minnesota. In her teaching style, Stella combines essentials of both Russian and American traditions and methods of teaching.</p>

            </div>
          </div>
        </div>
        <div class="container">
          <div class="col-sm-3 col-md-3 col-lg-3">
            <div class="gallery-item">
              <img src="assets/images/Irene.png" alt="Mrs. Merz" />
            </div>
          </div>
          <div class="col-sm-9 col-md-9 col-lg-9">
            <div class="gallery-item">
              <h2 class="font-alt">Mrs. Merz</h2>
              <h4 class="font-alt mb-0">Violin and Guitar</h4>
              <hr class="divider-w mt-10 mb-20">
              <p>Irene Merz is Academically trained musician, performer, and teacher, Irene Merz was born in Tbilisi,Georgia and received her Master's and Doctoral Degrees at Tbilisi Conservatory of Music. She is aThird-place winner of the 7th Annual Competition for Caucasus region musicians. While in Georgia,Irena was a member of Kutaisi Symphony Orchestra and Tbilisi Conservatory Symphony Orchestra.</p>

              <p>Irene enjoys sharing her professional skills with students of all levels, from beginners to advanced,using a unique combination of 35 years of educational and performance experience.</p>

              <p>Irene is also an experienced music therapist. She organized and participated in various musicalprograms at hospitals, orphanages, and nursing homes.</p>
            </div>
          </div>
        </div>
      </section>
      <hr class="divider-d">
      <?php include 'footer.html'; ?>
    </div>
    <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
  </main>
</body>

</html>
<?php include 'mainScripts.html'; ?>
