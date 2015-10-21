<!DOCTYPE html>
<html lang="sw">
    <head>
        <meta charaset ="UTF-8">
        <title>Pangisha</title>
        
        <link rel="stylesheet" type="text/css" href="public/css/app.css">
        <link href='https://fonts.googleapis.com/css?family=Work+Sans' rel='stylesheet' type='text/css'>
    </head>

    <body>
      <div class="fixed">
        <nav class="top-bar" data-topbar role="navigation">
          <ul class="title-area">
            <li class="name">
              <h1><a href="#">paNgisha</a></h1>
            </li>
             <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
          </ul>

          <section class="top-bar-section">
            <!-- Right Nav Section -->
            <ul class="right">
              <li class="has-form">
                  <div class="row collapse">
                    <div class="large-8 small-9 columns">
                      <input type="text" placeholder="Find Stuff">
                    </div>
                    <div class="large-4 small-3 columns">
                      <a href="#" class="alert button expand">Search</a>
                    </div>
                    </div>
                </li>
            </ul>

            <!-- Left Nav Section -->
            <ul class="left">
              <li><a href="#">CHUMBA</a></li>
              <li class="active"><a href="#">NYUMBA</a></li>
              <li><a href="#">OFISI</a></li>
              <li><a href="#">JENGO LA BIASHARA</a></li>
            </ul>
          </section>
        </nav>
      </div>
        

        
        <div role="main"id="content-area">
            <div class="row">
            <div class="large-12 colums">
              <form class="form">
                <fieldset>
                  <legend>Tafuta</legend>
                  <div class="row">
                    <input type="radio" name="aina" Id="category" value="chumba" /> <label for="chumba">Chumba</label>
                    <input type="radio" name="aina" Id="category" value="nyumba" /><label for="nyumba">Nyumba</label> 
                    <input type="radio" name="aina" Id="category" value="ofisi" /><label for="ofisi">Ofisi</label> 
                    <input type="radio" name="aina" Id="category" value="jengo" /><label for="jengo">Jengo la Biashara</label>

                      <select name="mkoa" >
                          <option value="0" selected>Chagua Mkoa</option
                          <option value="Arusha">Arusha</option>
                          <option value="Dar es Salaam">Dar es Salaam</option>
                          <option value="Dodoma">Dodoma</option>
                          <option value="Geita">Geita</option>
                          <option value="Iringa">Iringa</option>
                          <option value="Kagera">Kagera</option>
                          <option value="Katavi">Katavi</option>
                          <option value="Kigoma">Kigoma</option>
                          <option value="Kilimanjaro">Kilimanjaro</option>
                          <option value="Lindi">Lindi</option>
                          <option value="Manyara">Manyara</option>
                          <option value="Mara">Mara</option>
                          <option value="Mbeya">Mbeya</option>
                          <option value="Morogoro">Morogoro</option>
                          <option value="Mtwara">Mtwara</option>
                          <option value="Mwanza">Mwanza</option>
                          <option value="Njombe">Njombe</option>
                          <option value="Pemba">Pemba North</option>
                          <option value="Pemba">Pemba South</option>
                          <option value="Pwani">Pwani</option>
                          <option value="Rukwa">Rukwa</option>
                          <option value="Ruvuma">Ruvuma</option>
                          <option value="Shinyanga">Shinyanga</option>
                          <option value="Simiyu">Simiyu</option>
                          <option value="Singida">Singida</option>
                          <option value="Tabora">Tabora</option>
                          <option value="Tanga">Tanga</option>
                          <option value="Zanzibar North">Zanzibar North</option>
                          <option value="Zanzibar South and Central">Zanzibar South and Central</option>
                          <option value="Zanzibar West">Zanzibar West</option>>
                      </select>

                      <select name="wilaya" id="wilaya">
                        <option value="0">Chagua Wilaya</option>
                        <option value="Tabora">Tabora</option>
                      </select>

                      <select nama="kata" id="kata">
                        <option value="0">Chagua Kata</option>
                        <option value="Tabora">Tabora</option>
                      </select>

                      <select nama="mtaa" id="mtaa">
                        <option value="0">Chagua Mtaa</option>
                        <option value="Tabora">Tabora</option>
                      </select>

                  </div>
                  <div class="row">
                    <div class="large-4 columns">
                    </div>
                  </div>
                </fieldset>
              </form>
            </div>
          </div>
            <div class="row">
                <div class="small-12 large-9 columns"  id="main-content">
                    <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-2">
                        <li>
                          <a href="#"><img src="http://localhost:8888/pangisha/public/img/sample2.png" width="100%" height="auto" class="img"></a>
                        </li>
                        <li>
                          <ul class="pricing-table pricing">
                            <li class="title">Nyumba inapangishwa</li>
                            <li class="price">$99.99</li>
                            <li class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempor dolor at dictum ultrices. Aenean ac ornare neque. Quisque elementum.</li>
                            <li class="bullet-item">Dar es salaam->Kinondoni->Mkanya->PL - 28032</li>
                            <li class="cta-button"><a class="button radius expand" id="peruzi" href="#">Peruzi</a></li>
                          </ul>
                        </li>
                        <hr>
                        <li>
                          <a href="#"><img src="http://localhost:8888/pangisha/public/img/sample2.png" width="100%" height="auto" class="img"></a>
                        </li>
                        <li>
                          <ul class="pricing-table pricing">
                            <li class="title">Chumba kinapangishwa</li>
                            <li class="price">$99.99</li>
                            <li class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempor dolor at dictum ultrices. Aenean ac ornare neque. Quisque elementum.</li>
                            <li class="bullet-item">Dar es salaam->Kinondoni->Mkanya->PL - 28032</li>
                            <li class="cta-button"><a class="button radius expand" id="peruzi" href="#">Peruzi</a></li>
                          </ul>
                        </li>
                      </ul>
                </div>
                <div class="small-12 large-3 columns" id="sidebar">
                      <ul class="pricing-table pricing">
                            <li class="title">Nyumba Inauzwa</li>
                            <li class="price">$99.99</li>
                            <li class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempor dolor at dictum ultrices. Aenean ac ornare neque. Quisque elementum.</li>
                            <li class="bullet-item">Dar es salaam->Kinondoni->Mkanya->PL - 28032</li>
                            <li class="cta-button"><a class="button radius expand" id="peruzi" href="#">Peruzi</a></li>
                          </ul>
                        <ul class="pricing-table pricing">
                            <li class="title">Shamba Linauzwa</li>
                            <li class="price">$99.99</li>
                            <li class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempor dolor at dictum ultrices. Aenean ac ornare neque. Quisque elementum.</li>
                            <li class="bullet-item">Dar es salaam->Kinondoni->Mkanya->PL - 28032</li>
                            <li class="cta-button"><a class="button radius expand" id="peruzi" href="#">Peruzi</a></li>
                          </ul>
                </div>
            </div>
        </div>


        <div role="main" class="footer">
          
        </div>
        <script type="text/javascript" src="public/js/app.js"></script>
        <script type="text/javascript">
          $(document).ready(function() {
            $(document).foundation();
        });
        </script>
    </body>
</html>