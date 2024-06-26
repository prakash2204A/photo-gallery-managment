<?php include("includes/head.php"); ?>
<!DOCTYPE HTML>
<HTML>
<title> Art Guide</title>
<style type="text/css">

   .head-artists {
          font-size: 30px;
          font-family: "Yu Gothic UI Light";
          color: rgb( 45, 112, 213 );
          position: absolute;
          left: 50px;
          top: 80px;
          z-index: 19;
          }

        .head-guide{
          font-size: 30px;
         font-family: "Yu Gothic UI Light";
          position: absolute;
           left:150px;
          top: 80px;
          z-index: 19;
        }

        .hr{
            position:absolute;
            border: 1px solid #ffffff;
            top: 135px;
            width: 1140px;
            left: 49px;

        }
          .guide-background{

          background: url(pictures/3334896.jpg) no-repeat fixed;
          background-size: cover;
          box-shadow: 1px 1.732px 2px 0px rgb( 55, 52, 52 );
          position: inherit;
          width: 100%;
          height: 100%;
          z-index: 1;

        }
        .word2{
            position: relative;
            top: 115px;
            left:80px;
            font-family:"Yu Gothic UI Light";
             font-size:18px;
            color: #f2f2f2;
            margin-right: 200px;
            text-align: justify;
        }
        .word1{
            position: relative;
            top:130px;
            left: 50px;
            color: white;
            font-weight: bold;
            font-family:"Yu Gothic UI Light";
             font-size:22px;
        }

</style>
<body class="guide-background">

            <p >
              <h2 class="head-artists">Artists' </h2>
              <h2 class="head-guide">Guide</h2><br> <hr class="hr" style="border-bottom: 2px solid #FFFFFF;">
           </p>

            <h3 class="word1">Selling your art has never been so easy!</h3>
           <p class="word2">
                        1. Register and upload your artwork on <a style="color:#f2f2f2;" href="home.php">Photo Gallery.</a><br>
                        2. Deliver the artwork to the customer.<br>
                        3. Get 80% of the sales price.<br>
            </p>

            <h3 class="word1">How do I submit a request to display my artwork at the Photo Gallery?</h3>
                <p class="word2">Please click the "Sign Up" link in the top right corner of this page.</p>

            <h3 class="word1">Is this site reliable,,,or any problem of hacking or it is a fraud site?</h3>
                <p class="word2">Reliable... NOT a Fraud site..</p>

            <h3 class="word1">What is the purpose of the application?</h3>
                 <p class="word2">It takes only two steps and five minutes to complete the application. Your contact details and artistic history are on the first page. Five examples of your artwork must be uploaded, according to the second page. Within two days, your application will be evaluated.</p>


            <h3 class="word1">What kind of artwork do you show?</h3>
                <p class="word2">We exhibit art in every genre, style, size, and media.</p>

            <h3 class="word1">Is there an application fee?</h3>
                <p class="word2">No. Registration is free.</p>

            <h3 class="word1">How will you market my art?</h3>
                <p class="word2">We promote our artists' work in a number of ways. We manage a large online advertising campaign and we do a lot of search engine optimization. We have a large email list, and a popular Facebook page.</p>

            <h3 class="word1">What is your commission structure?</h3>
                <p class="word2"> Photo Gallery will pay you 80% of the selling price.  Pay for shipping and get your profit!<br><br>


            <h3 class="word1">Who covers the costs of packaging and shipping the artwork to the Buyer’s address?</h3>
                <p class="word2">You (the artist) cover the cost of packaging and shipping the artwork to the Buyer.</p>

            <h3 class="word1">If I exhibit my work at PHOTO GALLERY, may I seek other gallery representation?</h3>
                <p class="word2">Yes.</p>

            <h3 class="word1">How do I know when my artwork is sold? What do I do once it is sold?</h3>
                <p class="word2">Once your art is sold, you will receive an email notifying you of the sale.</p>

            <h3 class="word1">When and how do I get paid for sold artwork?</h3>
                <p class="word2">We pay by Cash on Delivery payment method that transfers 7 day after artwork is delivered to the client.</p>

            <h3 class="word1">Who owns the rights to my artwork once it is sold?</h3>
                <p class="word2">You retain the rights to your art after it is sold.</p>


            <h3 class="word1">How do I submit more art if I am already exhibiting my work at Photo Gallery?</h3>
                <p class="word2">You can upload your artwork through your artist profile page using a quality JPEG or PNG file. The image must be in focus, true to the color of the art, and at least 900 pixels wide.</p>

            <br><br><br><br><br><br><br><br><br>

        <!--<?php
        $file = fopen("guidelines.txt","r");
        while(! feof($file))
          {
          echo fgets($file);
          }
          fclose($file);
          ?>-->

 </body>
</HTML>
<?php include("includes/footer.php"); ?>