<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wptailwind
 */

get_header();
?>

<div id="primary" class="content-area w-full relative">

    <section class="hero relative bg-fixed pt-48 flex flex-col items-center justify-center w-full">
    <div class="sign h-auto mb-24 flex flex-wrap justify-center ">
     <div class="sign-top"> <span class="flicker">E</span><span class="let-it-shine">ye</span><span class="flicker">la</span><span class="let-it-shine">sh</span></div> 
   <div>   <span class="medium-flicker">E</span><span class="let-it-shine">xten</span><span class="flicker">si</span><span class="let-it-shine">ons</span></div>
    </div>
    <a href="<?php echo site_url() ?>/book" class="hero-btn  transform hover:-translate-y-2 self-center  inline-block w-auto">
    
    <svg
   xmlns:dc="http://purl.org/dc/elements/1.1/"
   xmlns:cc="http://creativecommons.org/ns#"
   xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
   xmlns:svg="http://www.w3.org/2000/svg"
   xmlns="http://www.w3.org/2000/svg"
   xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
   xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
   version="1.0"
   class="mx-auto"
   width="75"
   height="67.432846"
   id="svg2"
   sodipodi:docname="book-btn.svg"
   inkscape:version="1.0.1 (0767f8302a, 2020-10-17)">

  <sodipodi:namedview
     pagecolor="#ffffff"
     bordercolor="#666666"
     borderopacity="1"
     objecttolerance="10"
     gridtolerance="10"
     guidetolerance="10"
     inkscape:pageopacity="0"
     inkscape:pageshadow="2"
     inkscape:window-width="1848"
     inkscape:window-height="1016"
     id="namedview7"
     showgrid="false"
     inkscape:zoom="4.2063788"
     inkscape:cx="19.739667"
     inkscape:cy="35.535434"
     inkscape:window-x="72"
     inkscape:window-y="27"
     inkscape:window-maximized="1"
     inkscape:current-layer="svg2"
     fit-margin-top="0"
     fit-margin-left="0"
     fit-margin-right="0"
     fit-margin-bottom="0"
     inkscape:document-rotation="0" />
  <defs
     id="defs4" />
  <g
     id="layer1"
     transform="matrix(0.1171875,0,0,0.1171875,-0.29350947,-0.89701218)"
     style="fill:#f9f9f9">
    <path
       d="M 297.29747,550.86823 C 283.52243,535.43191 249.1268,505.33855 220.86277,483.99412 137.11867,420.75228 125.72108,411.5999 91.719238,380.29088 29.03471,322.57071 2.413622,264.58086 2.5048478,185.95124 2.5493594,147.56739 5.1656152,132.77929 15.914734,110.15398 34.151433,71.768267 61.014996,43.244667 95.360052,25.799457 119.68545,13.443675 131.6827,7.9542046 172.30448,7.7296236 c 42.49329,-0.234834 51.43863,4.7197234 76.43471,18.4518354 30.42451,16.714318 61.7399,52.435708 68.21323,77.810591 l 3.9981,15.6724 9.85963,-21.584508 c 55.71617,-121.972928 233.59836,-120.148052 295.50229,3.031588 19.63767,39.07605 21.79364,122.51317 4.38012,169.51287 -22.71527,61.30937 -65.38001,108.05053 -164.00634,179.67658 -64.68082,46.97364 -137.88474,118.04586 -142.98067,128.02803 -5.91548,11.58753 -0.28216,1.8159 -26.40808,-27.46078 z"
       id="path2417"
       style="fill:#f9f9f9" />
    <g
       transform="translate(129.28571,-64.285714)"
       id="g2221"
       style="fill:#f9f9f9" />
  </g>
  <g
     id="g862"
     transform="matrix(1.2362542,0,0,1.2362542,-16.87527,-14.591946)">
    <g
       aria-label="book"
       id="text836"
       style="font-style:normal;font-weight:normal;font-size:14.5226px;line-height:1.25;font-family:sans-serif;fill:#241a1a;fill-opacity:1;stroke:none;stroke-width:0.363065">
      <path
         d="M 26.426296,39.066769 V 28.37337 h 0.985664 v 4.304306 q 0.624018,-0.765841 1.39695,-1.14167 0.772931,-0.38292 1.694776,-0.38292 1.638047,0 2.793898,1.191307 1.162943,1.184216 1.162943,2.878992 0,1.673503 -1.170034,2.857719 -1.170033,1.184216 -2.815172,1.184216 -0.943118,0 -1.708958,-0.404194 -0.76584,-0.404193 -1.354403,-1.21258 v 1.418223 z m 3.971023,-0.758749 q 0.82966,0 1.531681,-0.404194 0.70202,-0.411285 1.113304,-1.14876 0.418376,-0.737476 0.418376,-1.560045 0,-0.822569 -0.418376,-1.567136 -0.418375,-0.744567 -1.127487,-1.155852 -0.70202,-0.418375 -1.503316,-0.418375 -0.815478,0 -1.552954,0.418375 -0.730384,0.411285 -1.127487,1.113305 -0.390011,0.70202 -0.390011,1.581318 0,1.340221 0.879298,2.240792 0.886389,0.900572 2.176972,0.900572 z"
         style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:14.5226px;font-family:'Century Gothic', '@wght=400';-inkscape-font-specification:'Century Gothic, @wght=400';font-variant-ligatures:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;text-align:center;text-anchor:middle;fill:#241a1a;fill-opacity:1;stroke-width:0.363065"
         id="path846" />
      <path
         d="m 39.913594,31.153086 q 1.779869,0 2.949903,1.290583 1.063667,1.177125 1.063667,2.786807 0,1.616774 -1.127487,2.829355 -1.120396,1.205489 -2.886083,1.205489 -1.772779,0 -2.900266,-1.205489 -1.120396,-1.212581 -1.120396,-2.829355 0,-1.602591 1.063667,-2.779716 1.170034,-1.297674 2.956995,-1.297674 z m 0,0.971483 q -1.233854,0 -2.120243,0.914753 -0.886389,0.914754 -0.886389,2.212428 0,0.836751 0.404193,1.560045 0.404194,0.723293 1.092032,1.120396 0.687838,0.390011 1.510407,0.390011 0.822569,0 1.510407,-0.390011 0.687838,-0.397103 1.092031,-1.120396 0.404194,-0.723294 0.404194,-1.560045 0,-1.297674 -0.893481,-2.212428 -0.886389,-0.914753 -2.113151,-0.914753 z"
         style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:14.5226px;font-family:'Century Gothic', '@wght=400';-inkscape-font-specification:'Century Gothic, @wght=400';font-variant-ligatures:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;text-align:center;text-anchor:middle;fill:#241a1a;fill-opacity:1;stroke-width:0.363065"
         id="path848" />
      <path
         d="m 49.415686,31.153086 q 1.779869,0 2.949903,1.290583 1.063667,1.177125 1.063667,2.786807 0,1.616774 -1.127487,2.829355 -1.120396,1.205489 -2.886083,1.205489 -1.772778,0 -2.900265,-1.205489 -1.120396,-1.212581 -1.120396,-2.829355 0,-1.602591 1.063667,-2.779716 1.170033,-1.297674 2.956994,-1.297674 z m 0,0.971483 q -1.233854,0 -2.120243,0.914753 -0.886389,0.914754 -0.886389,2.212428 0,0.836751 0.404193,1.560045 0.404194,0.723293 1.092032,1.120396 0.687838,0.390011 1.510407,0.390011 0.822569,0 1.510407,-0.390011 0.687838,-0.397103 1.092032,-1.120396 0.404193,-0.723294 0.404193,-1.560045 0,-1.297674 -0.89348,-2.212428 -0.886389,-0.914753 -2.113152,-0.914753 z"
         style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:14.5226px;font-family:'Century Gothic', '@wght=400';-inkscape-font-specification:'Century Gothic, @wght=400';font-variant-ligatures:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;text-align:center;text-anchor:middle;fill:#241a1a;fill-opacity:1;stroke-width:0.363065"
         id="path850" />
      <path
         d="m 55.258764,28.37337 h 0.999847 v 6.084175 l 3.56683,-3.105908 h 1.460769 l -4.233394,3.680288 4.481583,4.034844 h -1.40404 l -3.871748,-3.467555 v 3.467555 h -0.999847 z"
         style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:14.5226px;font-family:'Century Gothic', '@wght=400';-inkscape-font-specification:'Century Gothic, @wght=400';font-variant-ligatures:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;text-align:center;text-anchor:middle;fill:#241a1a;fill-opacity:1;stroke-width:0.363065"
         id="path852" />
    </g>
    <g
       id="text856"
       style="font-style:normal;font-weight:normal;font-size:14.5226px;line-height:1.25;font-family:sans-serif;fill:#ee908f;fill-opacity:1;stroke:none;stroke-width:0.363065" />
  </g>
</svg>



</a>
        <div class="container h-auto flex flex-col w-full">
            <div class="flex flex-col mb-10 lg:mb-0 ">
                
                
            </div>
            
        </div>
    </section>
   
   

    <main id="main" class="site-main flex flex-wrap w-full lg:w-11/12 mx-auto  mt-16 ">



    <secion class="services w-full mt-16 flex flex-wrap flex-col md:flex-row items-center justify-center md:justify-evenly">
    <?php
        $args = array(
			'post_type' => 'igfeeds',
			
        );
        $loop = new WP_QUERY( $args );
		while ( $loop->have_posts() ) :
			$loop->the_post();

			get_template_part( 'template-parts/content', 'igfeed' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
    </secion> 

    
      
    </main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
