<!--
  Definere indhold til title-tagget
  Include navigation
-->
<?php
  $title = "Aarhus Boulders - stedet hvor fællesskab og sport smelter sammen";
  $description = "Velkommen til Aarhus Boulders. Om du er nybegynder eller øvet klatrer så tilbyder vi faciliteterne, som passer til dine behov. Kom for at drikke en kop kaffe, hygge med vennerne eller prøve de mange forskellige klatrevægge. Aarhus Boulders er stedet, hvor fællesskab og sport smelter sammen.";
  include"includes/navigation.php";
?>
<main>
  <!-- video -->
  <section class="top top-front">
    <article class="intro-video">
      <video id="kalk_gif" autoplay loop muted playsinline>
        <source src="video/kalk.mp4" type="video/mp4">
      </video>
      <section class="video_overlay">
        <!-- Start/pause knap til video -->
        <section class="controls">
          <button id="pause_video"><img src="img/gfx/pause.png" alt="Pause video"></button>
          <button id="start_video"><img src="img/gfx/play.png" alt="Play video"></button>
          <button id="stop_video"><img src="img/gfx/stop.png" alt=""></button>
          <button id="mute_video"><img src="img/gfx/lyd-til.png" alt="Mute video"></button>
          <button id="unmute_video"><img src="img/gfx/lyd-fra.png" alt="Unmute video"></button>
        </section>
      <video id="full_video">
        <source src="video/boulders.mp4" type="video/mp4">
      </video>
      </section>
    </article>
    <article class="introtekst center">
      <h1>velkommen</h1>
      <p class="forsideintro_desktop forsideintro_mobile">Velkommen indenfor. Afspil videoen for at opleve en typisk dag hos Aarhus Boulders!</p>
      <button id="play_intro_video">Afspil</button>
    </article>
  </section>
  <!-- sociale medier bokse -->
  <article class="social_media">
    <section class="arrangementer">
      <a href="https://www.facebook.com/aarhusboulders">
        <img src="img/sociale-ikoner/facebook.png" alt="facebook boulders" onmouseover="this.src='img/sociale-ikoner/facebook-like.png'" onmouseout="this.src='img/sociale-ikoner/facebook.png'"></a>
      <h2>nyheder og events</h2>
      <p>Vil du også gerne vide, hvornår vi holder det næste Late Night Bouldering-arrangement eller åbning af nye vægge? Så hop over på <a href="https://www.facebook.com/aarhusboulders">Facebook</a>, hvor du får de nyeste opdateringer om arrangementer og nyheder hos Aarhus Boulders.</p>
      <ul>
        <li><a href="https://www.facebook.com/aarhusboulders">Følg os på Facebook</a></li>
      </ul>
    </section>
    <section class="arrangementer">
      <a href="https://www.instagram.com/aarhusboulders/"><img src="img/sociale-ikoner/instagram.png" alt="instagram boulders" onmouseover="this.src='img/sociale-ikoner/instagram-like.png'" onmouseout="this.src='img/sociale-ikoner/instagram.png'"></a>
      <h2>Socialt</h2>
      <p>Har du nogle fede billeder eller videoer fra dit seneste besøg hos Aarhus Boulders? Så del dem med dine venner og tag os på <a href="https://www.instagram.com/explore/tags/aarhusboulders/">#aarhusboulders</a>. Du kan også smutte forbi <a href="https://www.instagram.com/aarhusboulders/">@aarhusboulders</a> og se vores mange fede billeder og videoer.</p>
      <ul>
        <li><a href="https://www.instagram.com/aarhusboulders/">Følg os på Instagram</a></li>
      </ul>
    </section>
    <section class="arrangementer">
      <a href="https://vimeo.com/user47037971"><img src="img/sociale-ikoner/vimeo.png" alt="vimeo boulders" onmouseover="this.src='img/sociale-ikoner/vimeo-like.png'" onmouseout="this.src='img/sociale-ikoner/vimeo.png'"></a>
      <h2>Inspiration</h2>
      <p>Mangler du inspiration til at gennemføre de mange klatrevægge? Så besøg os på <a href="https://vimeo.com/user47037971">Vimeo</a>, hvor vi løbende lægger inspirerende videoer op, som kan hjælpe dig med at løse problemerne ved dit næste besøg.</p>
      <ul>
        <li><a href="https://vimeo.com/user47037971">Følg os på Vimeo</a></li>
      </ul>
    </section>
  </article>
</main>
<!-- Include footer -->
<?php
  include"includes/footer.php";
?>
