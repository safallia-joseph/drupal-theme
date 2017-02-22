<header class="center mw8 cf relative ph3">
  <?php if ($logo): ?>
    <a class = "link" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
      <img class = "h3b pv4" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
    </a>
  <?php endif; ?>
  <div class="absolute c3-light-type top-0 right-1 f6" style="top:1.5rem">
    <?php print render($page['top_header']); ?>
  </div>
  <nav class="pt5 dib f5 fr" style="padding-top: 5.5rem;>
    <?php print render($page['header']); ?>
  </nav>
</header>

    <main class="">

      <section  class=" w-100 ">

  <!-- Products drop down -->
  <div id="products-menu-content" class="top-0 left-0 w-100 bg-lightbox dropdown-menu dn ba b--near-white z-999" style="top: 8rem;">
    <div class="mw8 center pv1 ph5 bg-white o-100 cf f">
      <!-- col 1 -->
      <div class="fl w-100 w-third-ns pa3">
        <ul class="list pl0 lh-list mb3">
          <li class="mb1 f5"><a href="#" class="link dim c3-dark-type b ttu">Wireless Connectivity</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">802.11ac Wi-Fi</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">802.11n Wi-Fi with MCU</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">Automotive Wi-Fi</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">Bluetooth Low Energy (BLE)</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">All Wireless Devices</a></li>
        </ul>
        <ul class="list pl0 lh-list mb3">
          <li class="mb1 f5"><a href="#" class="link dim c3-dark-type b ttu">MCU and PSoC Families</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">Traveo 32-bit ARM Automotive MCUs</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">FM4 32-bit ARM Cortex MCUs</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">PSoC 32-bit ARM Cortex MCUs</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">PSoC 8-bit MCUs</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">16-bit and 8-bit MCUs</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">PSoC® Software</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">All FM and PSoC MCUs</a></li>
        </ul>
        <ul class="list pl0 lh-list">
          <li class="mb1 f5"><a href="#" class="link dim c3-dark-type b ttu">Touch Sensing (CapSense)</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">Automotive TrueTouch</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">CapSense Controllers</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">TrueTouch Fingerprint Reader</a></li>
        </ul>
      </div>
      <!-- col 2 -->
      <div class="fl w-100 w-third-ns pa3">
        <ul class="list pl0 lh-list mb3">
          <li class="mb1 f5"><a href="#" class="link dim c3-dark-type b ttu">Universal Serial Bus (USB)</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">USB Type-C and Power Delivery</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">USB SuperSpeed Hubs</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">USB SuperSpeed Peripherals</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">USB Hi-Speed Hubs</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">USB Hi-Speed Peripherals</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">All USB Devices</a></li>
        </ul>
        <ul class="list pl0 lh-list">
          <li class="mb1 f5"><a href="#" class="link dim  c3-dark-type b ttu">Power Management ICs</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">Energy Harvesting PMICs</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">Automotive PMICs</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">Standard PMICs</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">LED Lighting Driver ICs</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">Voltage Supervisor ICs</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">Battery Charger ICs</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">Easy DesignSim</a></li>
        </ul>
      </div>
      <!-- col 3 -->
      <div class="fl w-100 w-third-ns pa3">
        <ul class="list pl0 lh-list mb3">
          <li class="mb1 f5"><a href="#" class="link dim c3-dark-type b ttu">Memory</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">Serial NOR Flash</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">Parallel NOR Flash</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">HyperBus Memory</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">NAND Flash Memory</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">F-RAM (Nonvolatile Ferroelectric RAM)</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">nvSRAM (Nonvolatile SRAM)</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">Asynchronous SRAM</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">Synchronous SRAM</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">Other Memories</a></li>
        </ul>
        <ul class="list pl0 lh-list mb3">
          <li class="mb1 f5"><a href="#" class="link dim c3-dark-type b ttu">Clocks & Buffers</a></li>
        </ul>
        <ul class="list pl0 lh-list">
           <li class="mb1 f5"><a href="#" class="link dim c3-dark-type b ttu">Interface</a></li>
        </ul>
      </div>
      </div>
      <div class="mw8 center tc bg-white pb5 tc">
        <img class="h1 close-nav" src="sites/all/themes/cy/images/main-nav-caret.svg" alt="Close">
      </div>
    </div>

  </li>

<?php print render($page['content']); ?>
  <!-- Solutions drop down -->
  <div id="solutions-menu-content" class="top-0 left-0 w-100 bg-lightbox dropdown-menu dn ba b--near-white z-999" style="top: 8rem;">
    <div class="mw8 center pv1 ph5 bg-white o-100 cf f">
      <!-- col 1 -->
      <div class="fl w-100 w-third-ns pa3">
  <div class="w-100  center pa3">
      <ul class="list pl0 lh-list f5">
        <!-- <li class="f5 mb1"><a href="#" class="link dim c3-dark-type b ttu">Solutions</a></li> -->
        <li class="pl1"><a href="#" class="link dim c3-light-type">Internet of Things (IoT)</a></li>
        <li class="pl1"><a href="#" class="link dim c3-light-type">Aerospace & Defense</a></li>
        <li class="pl1"><a href="#" class="link dim c3-light-type">Automotive Solutions</a></li>
        <li class="pl1"><a href="#" class="link dim c3-light-type">Home Appliance</a></li>
        <li class="pl1"><a href="#" class="link dim c3-light-type">Medical</a></li>
        <li class="pl1"><a href="#" class="link dim c3-light-type">Consumer Electronics</a></li>
        <li class="pl1"><a href="#" class="link dim c3-light-type">Communication & Telecom</a></li>
        <li class="pl1"><a href="#" class="link dim c3-light-type">Industrial</a></li>
        <li class="pl1"><a href="#" class="link dim c3-light-type">Wireless</a></li>
        <li class="pl1"><a href="#" class="link dim c3-light-type">Reference Designs</a></li>
      </ul>
      </div>
      <div class="mw8 center bg-white pb5 tc">
        <img class="h1 close-nav" src="sites/all/themes/cy/images/main-nav-caret.svg" alt="Close">
      </div>
    </div>

  </li>


  <!-- Design Support drop down -->
  <div id="design-menu-content" class="top-0 left-0 w-100 bg-lightbox dropdown-menu dn ba b--near-white z-999" style="top: 8rem;">
    <div class="mw8 center pv1 ph5 bg-white o-100 cf f">
      <!-- col 1 -->
      <div class="fl w-100 w-third-ns pa3">
        <ul class="list pl0 lh-list mb3">
          <li class="mb1 f5"><a href="#" class="link dim c3-dark-type b ttu">DESIGN - OTHER THING Wireless Connectivity</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">BOOO 802.11ac Wi-Fi</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">802.11n Wi-Fi with MCU</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">Automotive Wi-Fi</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">Bluetooth Low Energy (BLE)</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">All Wireless Devices</a></li>
        </ul>
        <ul class="list pl0 lh-list mb3">
          <li class="mb1 f5"><a href="#" class="link dim c3-dark-type b ttu">MCU and PSoC Families</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">Traveo 32-bit ARM Automotive MCUs</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">FM4 32-bit ARM Cortex MCUs</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">PSoC 32-bit ARM Cortex MCUs</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">PSoC 8-bit MCUs</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">16-bit and 8-bit MCUs</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">PSoC® Software</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">All FM and PSoC MCUs</a></li>
        </ul>
        <ul class="list pl0 lh-list">
          <li class="mb1 f5"><a href="#" class="link dim c3-dark-type b ttu">Touch Sensing (CapSense)</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">Automotive TrueTouch</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">CapSense Controllers</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">TrueTouch Fingerprint Reader</a></li>
        </ul>
      </div>
      <!-- col 2 -->
      <div class="fl w-100 w-third-ns pa3">
        <ul class="list pl0 lh-list mb3">
          <li class="mb1 f5"><a href="#" class="link dim c3-dark-type b ttu">Universal Serial Bus (USB)</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">USB Type-C and Power Delivery</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">USB SuperSpeed Hubs</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">USB SuperSpeed Peripherals</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">USB Hi-Speed Hubs</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">USB Hi-Speed Peripherals</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">All USB Devices</a></li>
        </ul>
        <ul class="list pl0 lh-list">
          <li class="mb1 f5"><a href="#" class="link dim  c3-dark-type b ttu">Power Management ICs</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">Energy Harvesting PMICs</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">Automotive PMICs</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">Standard PMICs</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">LED Lighting Driver ICs</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">Voltage Supervisor ICs</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">Battery Charger ICs</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">Easy DesignSim</a></li>
        </ul>
      </div>
      <!-- col 3 -->
      <div class="fl w-100 w-third-ns pa3">
        <ul class="list pl0 lh-list mb3">
          <li class="mb1 f5"><a href="#" class="link dim c3-dark-type b ttu">Memory</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">Serial NOR Flash</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">Parallel NOR Flash</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">HyperBus Memory</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">NAND Flash Memory</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">F-RAM (Nonvolatile Ferroelectric RAM)</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">nvSRAM (Nonvolatile SRAM)</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">Asynchronous SRAM</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">Synchronous SRAM</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">Other Memories</a></li>
        </ul>
        <ul class="list pl0 lh-list mb3">
          <li class="mb1 f5"><a href="#" class="link dim c3-dark-type b ttu">Clocks & Buffers</a></li>
        </ul>
        <ul class="list pl0 lh-list">
           <li class="mb1 f5"><a href="#" class="link dim c3-dark-type b ttu">Interface</a></li>
        </ul>
      </div>
      </div>
      <div class="mw8 center bg-white pb5 tc">
        <img class="h1 close-nav" src="sites/all/themes/cy/images/main-nav-caret.svg" alt="Close">
      </div>
    </div>

  </li>




  <!-- Buy Sample Support drop down -->
  <div id="buy-menu-content" class="top-0 left-0 w-100 bg-lightbox dropdown-menu dn ba b--near-white z-999" style="top: 8rem;">
    <div class="mw8 center pv1 ph5 bg-white o-100 cf f">
      <!-- col 1 -->
      <div class="fl w-100 w-third-ns pa3">
        <ul class="list pl0 lh-list mb3">
          <li class="mb1 f5"><a href="#" class="link dim c3-dark-type b ttu">BUY - OTHER THING Wireless Connectivity</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">BOOO 802.11ac Wi-Fi</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">802.11n Wi-Fi with MCU</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">Automotive Wi-Fi</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">Bluetooth Low Energy (BLE)</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">All Wireless Devices</a></li>
        </ul>
        <ul class="list pl0 lh-list mb3">
          <li class="mb1 f5"><a href="#" class="link dim c3-dark-type b ttu">MCU and PSoC Families</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">Traveo 32-bit ARM Automotive MCUs</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">FM4 32-bit ARM Cortex MCUs</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">PSoC 32-bit ARM Cortex MCUs</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">PSoC 8-bit MCUs</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">16-bit and 8-bit MCUs</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">PSoC® Software</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">All FM and PSoC MCUs</a></li>
        </ul>
        <ul class="list pl0 lh-list">
          <li class="mb1 f5"><a href="#" class="link dim c3-dark-type b ttu">Touch Sensing (CapSense)</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">Automotive TrueTouch</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">CapSense Controllers</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">TrueTouch Fingerprint Reader</a></li>
        </ul>
      </div>
      <!-- col 2 -->
      <div class="fl w-100 w-third-ns pa3">
        <ul class="list pl0 lh-list mb3">
          <li class="mb1 f5"><a href="#" class="link dim c3-dark-type b ttu">Universal Serial Bus (USB)</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">USB Type-C and Power Delivery</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">USB SuperSpeed Hubs</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">USB SuperSpeed Peripherals</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">USB Hi-Speed Hubs</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">USB Hi-Speed Peripherals</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">All USB Devices</a></li>
        </ul>
        <ul class="list pl0 lh-list">
          <li class="mb1 f5"><a href="#" class="link dim  c3-dark-type b ttu">Power Management ICs</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">Energy Harvesting PMICs</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">Automotive PMICs</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">Standard PMICs</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">LED Lighting Driver ICs</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">Voltage Supervisor ICs</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">Battery Charger ICs</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">Easy DesignSim</a></li>
        </ul>
      </div>
      <!-- col 3 -->
      <div class="fl w-100 w-third-ns pa3">
        <ul class="list pl0 lh-list mb3">
          <li class="mb1 f5"><a href="#" class="link dim c3-dark-type b ttu">Memory</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">Serial NOR Flash</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">Parallel NOR Flash</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">HyperBus Memory</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">NAND Flash Memory</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">F-RAM (Nonvolatile Ferroelectric RAM)</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">nvSRAM (Nonvolatile SRAM)</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">Asynchronous SRAM</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">Synchronous SRAM</a></li>
          <li class="pl1 fw1"><a href="#" class="link dim c3-light-type">Other Memories</a></li>
        </ul>
        <ul class="list pl0 lh-list mb3">
          <li class="mb1 f5"><a href="#" class="link dim c3-dark-type b ttu">Clocks & Buffers</a></li>
        </ul>
        <ul class="list pl0 lh-list">
           <li class="mb1 f5"><a href="#" class="link dim c3-dark-type b ttu">Interface</a></li>
        </ul>
      </div>
      </div>
      <div class="mw8 center bg-white pb5 tc">
        <img class="h1 close-nav" src="sites/all/themes/cy/images/main-nav-caret.svg" alt="Close">
      </div>
    </div>

  </li>


</section>


<section  class="bg-navy w-100  h-hero relative">



  <div class="mw8 white cf">

  <div id="myslide" class="center">
                <div class="cover">
                    <div class="mystuff bg-hero-1">

                      <div class="carousel-entry">
                        <h1 class="w-50-ns ttu f2 fw8 f-brn-gro lh-solid c3-f-hero pt-hero mt0 mb3">We live for<br> <span class="c3-red">problems.</span></h1>
                        <div class="fl-ns w-50-ns">
                          <p class="lh-copy f5 fw1 mv0">Curious minds don’t accept the status quo.  They love problems. And so do we. In fact, we’re here for one reason only: to provide the solutions that help you turn today’s problems into the ideas embedded in tomorrow.</p>
                        </div>
                        <div class="fl-ns w-50-ns">
                          <a class="link white fw8 f4 no-underline br-pill ba ph4 pv2 mb2 dib ttu ml5" href="#0">See What We're Up To</a>
                        </div>
                      </div>
                    </div>



                    <div class="mystuff bg-hero-2">

                      <div class="carousel-entry">
                        <h1 class="w-50-ns ttu f2 fw8 f-brn-gro lh-solid c3-f-hero pt-hero mt0 mb3">Other <br> <span class="c3-red">problems.</span></h1>
                        <div class="fl-ns w-50-ns">
                          <p class="lh-copy f5 fw1 mv0">Curious minds don’t accept the status quo.  They love problems. And so do we. In fact, we’re here for one reason only: to provide the solutions that help you turn today’s problems into the ideas embedded in tomorrow.</p>
                        </div>
                        <div class="fl-ns w-50-ns">
                          <a class="link white fw8 f4 no-underline br-pill ba ph4 pv2 mb2 dib ttu ml5" href="#0">See What We're Up To</a>
                        </div>
                      </div>
                    </div>



                    <div class="mystuff bg-hero-3">

                      <div class="carousel-entry">
                        <h1 class="w-50-ns ttu f2 fw8 f-brn-gro lh-solid c3-f-hero pt-hero mt0 mb3">Some stuff <br> <span class="c3-red">here.</span></h1>
                        <div class="fl-ns w-50-ns">
                          <p class="lh-copy f5 fw1 mv0">Curious minds don’t accept the status quo.  They love problems. And so do we. In fact, we’re here for one reason only: to provide the solutions that help you turn today’s problems into the ideas embedded in tomorrow.</p>
                        </div>
                        <div class="fl-ns w-50-ns">
                          <a class="link white fw8 f4 no-underline br-pill ba ph4 pv2 mb2 dib ttu ml5" href="#0">See What We're Up To</a>
                        </div>
                      </div>
                    </div>


                    <div class="mystuff bg-hero-4">

                      <div class="carousel-entry">
                        <h1 class="w-50-ns ttu f2 fw8 f-brn-gro lh-solid c3-f-hero pt-hero mt0 mb3">Some stuff <br> <span class="c3-red">here.</span></h1>
                        <div class="fl-ns w-50-ns">
                          <p class="lh-copy f5 fw1 mv0">Curious minds don’t accept the status quo.  They love problems. And so do we. In fact, we’re here for one reason only: to provide the solutions that help you turn today’s problems into the ideas embedded in tomorrow.</p>
                        </div>
                        <div class="fl-ns w-50-ns">
                          <a class="link white fw8 f4 no-underline br-pill ba ph4 pv2 mb2 dib ttu ml5" href="#0">See What We're Up To</a>
                        </div>
                      </div>
                    </div>
                </div>



  </div>


  <div class="clear "></div>

  <div id="button" class="center outer-btns">
      <div class="center inner-btns">
      <a class="button1 active" rel="1"></a>
      <a class="button2" rel="2"></a>
      <a class="button3" rel="3"></a>
      <a class="button4" rel="4"></a>
    </div>
  </div>

</div>

</div>




</section>

<section class="cf w-100 mb3">

  <div class="fl w-50 w-25-l bt br b--white bw2">
    <div class="aspect-ratio aspect-ratio--4x3 tc">
      <img style="background-image:url(/sites/all/themes/cy/images/home-featured/psoc6.jpg);"
        class="db bg-center cover aspect-ratio--object" />
      <h2 class="white w-100 z-9999 absolute mv0 ph2" style="bottom: 15%;">PSoC6 Launch</h2>
    </div>
  </div>
  <div class="fl w-50 w-25-l bt br b--white bw2">
    <div class="aspect-ratio aspect-ratio--4x3">
      <img style="background-image:url(/sites/all/themes/cy/images/home-featured/11ac.jpg);"
        class="db bg-center cover aspect-ratio--object" />
      <h2 class="white w-100 tc z-9999 absolute mv0 ph2" style="bottom: 15%;">11ac announcement</h2>
    </div>
  </div>
  <div class="fl w-50 w-25-l bt br b--white bw2">
    <div class="aspect-ratio aspect-ratio--4x3">
      <img style="background-image:url(/sites/all/themes/cy/images/home-featured/cpr.jpg);"
        class="db bg-center cover aspect-ratio--object" />
      <h2 class="white w-100 tc z-9999 absolute mv0 ph2" style="bottom: 15%;">Continental press release</h2>
    </div>
  </div>
  <div class="fl w-50 w-25-l bt b--white bw2">
    <div class="aspect-ratio aspect-ratio--4x3">
      <img style="background-image:url(/sites/all/themes/cy/images/home-featured/cypress3.jpg);"
        class="db bg-center cover aspect-ratio--object" />
      <h2 class="white w-100 tc z-9999 absolute mv0 ph2" style="bottom: 15%;">Cypress 3.0</h2>
    </div>
  </div>
</section>

<section class="c3-bg-solutions pb3 ph3 mb3">
  <div class="mw8 center pv5 cf">

    <p class="fr pt3"><a href="#" class="link white dim">View All Solutions &raquo;</a></p>
    <h2 class="white fw1 f2 mt3 mb5">Solutions</h2>

    <div class="w-third fl">
      <a href="#" class="dib link solution-card">
      <div class="white c3-bg-navy cf mr2 relative" style="height: 20rem;">
        <div class="ph4 pt5 pb4">
          <h1 class="f4 mv0 white ttu b">Automotive</h1>
          <p class="lh-copy">Turn a car into the most sophisticated mobile device with our ADAS, infotainment and instrument cluster solutions.</p>
        </div>
        <div class="c3-bg-blue pa2 dib mr0 mb3 absolute right-0 bottom-1 go-solution">
          <p class="f5 mv0 tr normal ttu b white">Go <span class="sans-serif">&rarr;</span></p>
        </div>
      </div>
      </a>
    </div>

    <div class="w-third fl">
      <a href="#" class="dib link solution-card">
      <div class="white c3-bg-navy cf mh3 relative" style="height: 20rem;">
        <div class="ph4 pt5 pb4">
          <h1 class="f4 mv0 white ttu">Consumer</h1>
          <p class="lh-copy">Turn a car into the most sophisticated mobile device with our ADAS, infotainment and instrument cluster solutions.</p>
        </div>
        <div class="c3-bg-blue pa2 dib mr0 mb3 absolute right-0 bottom-1 go-solution">
          <p class="f5 mv0 tr normal ttu b white">Go <span class="sans-serif">&rarr;</span></p>
        </div>
      </div>
      </a>
    </div>

    <div class="w-third fl">
      <a href="#" class="dib link solution-card">
      <div class="white c3-bg-navy cf ml2 relative" style="height: 20rem;">
        <div class="ph4 pt5 pb4">
          <h1 class="f4 mv0 white ttu">Industrial</h1>
          <p class="lh-copy">Turn a car into the most sophisticated mobile device with our ADAS, infotainment and instrument cluster solutions.</p>
        </div>
        <div class="c3-bg-blue pa2 dib mr0 mb3 absolute right-0 bottom-1 go-solution">
          <p class="f5 mv0 tr normal ttu b white">Go <span class="sans-serif">&rarr;</span></p>
        </div>
      </div>
      </a>
    </div>

  </div>
</section>


<section class="c3-bg-products mb3 pb3 ph3">
  <div class="mw8 center pv5 cf" >

    <p class="fr pt3"><a href="#" class="link white dim">View All Products &raquo;</a></p>
    <h2 class="white fw1 f2 mt3 mb5">Products</h2>

<div class="cf mb3 w-100">
    <div class="w-third fl">
      <a href="#" class="link dim product-card">
      <div class="bg-white cf mr2 relative" style="height: 25rem;">
          <img class="w-100" src="/sites/all/themes/cy/images/home-products/prod3.jpg">
        <div class="pa4">
          <h1 class="f4 mv0 c3-dark-type ttu">Bluetooth Low Energy Connectivity Solutions</h1>
          <p class="lh-copy c3-light-type">Cypress’s Bluetooth Low Energy (BLE) or Bluetooth Smart portfolio consists of WICED® framework.</p>
        </div>
        <div class="c3-bg-mont-blue pa2 dib mr0 mb3 absolute right-0 bottom-1 go-product">
          <p class="f5 mv0 tr normal ttu b white">Go <span class="sans-serif">&rarr;</span></p>
        </div>
      </div>
      </a>
    </div>
    <div class="w-third fl">
      <a href="#" class="link dim product-card">
      <div class="bg-white cf mh2 relative" style="height: 25rem;">
          <img class="w-100" src="/sites/all/themes/cy/images/home-products/prod3.jpg">
        <div class="pa4">
          <h1 class="f4 mv0 c3-dark-type ttu">Bluetooth Low Energy Connectivity Solutions</h1>
          <p class="lh-copy c3-light-type">Cypress’s Bluetooth Low Energy (BLE) or Bluetooth Smart portfolio consists of WICED® framework.</p>
        </div>
        <div class="c3-bg-mont-blue pa2 dib mr0 mb3 absolute right-0 bottom-1 go-product">
          <p class="f5 mv0 tr normal ttu b white">Go <span class="sans-serif">&rarr;</span></p>
        </div>
      </div>
      </a>
    </div>
    <div class="w-third fl">
      <a href="#" class="link dim product-card">
      <div class="bg-white cf ml2 relative" style="height: 25rem;">
          <img class="w-100" src="/sites/all/themes/cy/images/home-products/prod3.jpg">
        <div class="pa4">
          <h1 class="f4 mv0 c3-dark-type ttu">Bluetooth Low Energy Connectivity Solutions</h1>
          <p class="lh-copy c3-light-type">Cypress’s Bluetooth Low Energy (BLE) or Bluetooth Smart portfolio consists of WICED® framework.</p>
        </div>
        <div class="c3-bg-mont-blue pa2 dib mr0 mb3 absolute right-0 bottom-1 go-product">
          <p class="f5 mv0 tr normal ttu b white">Go <span class="sans-serif">&rarr;</span></p>
        </div>
      </div>
      </a>
    </div>
</div>
<div class="cf mb3">
    <div class="w-third fl">
      <a href="#" class="link dim product-card">
      <div class="bg-white cf mr2 relative" style="height: 25rem;">
          <img class="w-100" src="/sites/all/themes/cy/images/home-products/prod3.jpg">
        <div class="pa4">
          <h1 class="f4 mv0 c3-dark-type ttu">Bluetooth Low Energy Connectivity Solutions</h1>
          <p class="lh-copy c3-light-type">Cypress’s Bluetooth Low Energy (BLE) or Bluetooth Smart portfolio consists of WICED® framework.</p>
        </div>
        <div class="c3-bg-mont-blue pa2 dib mr0 mb3 absolute right-0 bottom-1 go-product">
          <p class="f5 mv0 tr normal ttu b white">Go <span class="sans-serif">&rarr;</span></p>
        </div>
      </div>
      </a>
    </div>
    <div class="w-third fl">
      <a href="#" class="link dim product-card">
      <div class="bg-white cf mh2 relative" style="height: 25rem;">
          <img class="w-100" src="/sites/all/themes/cy/images/home-products/prod3.jpg">
        <div class="pa4">
          <h1 class="f4 mv0 c3-dark-type ttu">Bluetooth Low Energy Connectivity Solutions</h1>
          <p class="lh-copy c3-light-type">Cypress’s Bluetooth Low Energy (BLE) or Bluetooth Smart portfolio consists of WICED® framework.</p>
        </div>
        <div class="c3-bg-mont-blue pa2 dib mr0 mb3 absolute right-0 bottom-1 go-product">
          <p class="f5 mv0 tr normal ttu b white">Go <span class="sans-serif">&rarr;</span></p>
        </div>
      </div>
      </a>
    </div>
    <div class="w-third fl">
      <a href="#" class="link dim product-card">
      <div class="bg-white cf ml2 relative" style="height: 25rem;">
          <img class="w-100" src="/sites/all/themes/cy/images/home-products/prod3.jpg">
        <div class="pa4">
          <h1 class="f4 mv0 c3-dark-type ttu">Bluetooth Low Energy Connectivity Solutions</h1>
          <p class="lh-copy c3-light-type">Cypress’s Bluetooth Low Energy (BLE) or Bluetooth Smart portfolio consists of WICED® framework.</p>
        </div>
        <div class="c3-bg-mont-blue pa2 dib mr0 mb3 absolute right-0 bottom-1 go-product">
          <p class="f5 mv0 tr normal ttu b white">Go <span class="sans-serif">&rarr;</span></p>
        </div>
      </div>
      </a>
    </div>
</div>

  </div>
</section>


<section class="c3-bg-quicklinks ph3">
  <div class="mw8 center pv5 cf" >
    <h2 class="white fw1 f2 mt3 mb5">Quick Links</h2>
    <div class="cf mb3">
      <a class="link db" href="">
        <div class="w-25 fl  tc">
          <img class="h3" src="/sites/all/themes/cy/images/home-quicklinks/store.svg">
          <h3 class="white f-brn-gro ttu f4 fw8">Store</h3>
        </div>
      </a>
      <a class="link db" href="">
        <div class="w-25 fl  tc">
          <img class="h3" src="sites/all/themes/cy/images/home-quicklinks/community.svg">
          <h3 class="white f-brn-gro ttu f4 fw8">Community</h3>
        </div>
      </a>
      <a class="link db" href="">
        <div class="w-25 fl  tc">
          <img class="h3" src="sites/all/themes/cy/images/home-quicklinks/software.svg">
          <h3 class="white f-brn-gro ttu f4 fw8">Software</h3>
        </div>
      </a>
      <a class="link db" href="">
        <div class="w-25 fl  tc">
          <img class="h3" src="sites/all/themes/cy/images/home-quicklinks/psoc6.svg">
          <h3 class="white f-brn-gro ttu f4 fw8">PSoC 6<sup>&reg;</sup></h3>
        </div>
      </a>
    </div>
  </div>
</section>

<section>
  <div class="mw8 center pa3 cf" >
    <p class="fr pt4"><a href="#" class="link dim c3-dark-type">View All Videos &raquo;</a></p>
    <h3 class="fw1 f2 mb">Videos</h2>
    <div class="cf">
      <a class="linkdd db" href="">
        <div class="w-25 fl pa3">
          <h5 class="mv0 f5"><a href="#" class="link dim c3-dark-type">Cypress Timing Solutions &raquo;</a></h5>
        </div>
      </a>
      <a class="linkdd db" href="">
        <div class="w-25 fl pa3">
          <h5 class="mv0 f5"><a href="#" class="link dim c3-dark-type">Cypress’ ECC SRAMs for Industrial and Automotive Applications &raquo;</a></h5>
        </div>
      </a>
      <a class="linkdd db" href="">
        <div class="w-25 fl pa3">
          <h5 class="mv0 f5"><a href="#" class="link dim c3-dark-type">PSoC Analog Coprocessor Sensing Demo &raquo;</a></h5>
        </div>
      </a>
      <a class="linkdd db" href="">
        <div class="w-25 fl pa3">
          <h5 class="mv0 f5"><a href="#" class="link dim c3-dark-type">PSoC 5LP Bluetooth Quadcopter &raquo;</a></h5>
        </div>
      </a>
    </div>
  </div>
</section>

<section class="bb b--black-10">
  <div class="mw8 center cf" >
    <h3 class="fw1 f2 mb">Latest News</h2>
    <div class="cf">

        <div class="w-50 fl" >
          <div class="mr3 bg-near-white pa4 relative" style="height: 25rem;">
            <h3 class="mv0 f4 ttu bb pb3">News</h3>
            <p class="lh-copy"><a href="#" class="link dim c3-dark-type">Cypress Closes $550 Million Acquisition Of Broadcom's 'Internet Of Things' Business - <b>Forbes</b></a></p>
            <p class="lh-copy"><a href="#" class="link dim c3-dark-type">Cypress Upbeat on Its Expanded Reach into Internet of Things - <b>Barron's</b></a></p>
            <p class="lh-copy"><a href="#" class="link dim c3-dark-type">Ex-Broadcom Unit to Shape Cypress IoT Future - <b>EE Times</b></a></p>
            <p class="lh-copy"><a href="#" class="link dim c3-dark-type">Broadcom's IoT Unit Gets a New Life With Cypress</a></p>
            <p class="lh-copy"><a href="#" class="link dim c3-dark-type">Engineering Design Studio brings mind and hand to EECS</a></p>
            <p class="mt4 absolute bottom-2 right-2"><a href="#" class="link dim c3-dark-type">View All News &raquo;</a></p>
          </div>
        </div>
        <div class="w-50 fl">
          <div class="mr2 bg-near-white pa4 relative" style="height: 25rem;">
            <h3 class="mv0 f4 ttu bb pb3">Blog Posts</h3>
            <p class="lh-copy"><a href="#" class="link dim c3-dark-type">Theremin with Cypress' PSoC Analog Coprocessor!</a></p>
            <p class="lh-copy"><a href="#" class="link dim c3-dark-type">Cypress Maker Lab - The burns have healed</a></p>
            <p class="lh-copy"><a href="#" class="link dim c3-dark-type">Cypress Maker Lab - Oh dear, the parts arrived</a></p>
            <p class="lh-copy"><a href="#" class="link dim c3-dark-type">PSoC Creator 4.0 Update 1 Released!</a></p>
            <p class="lh-copy"><a href="#" class="link dim c3-dark-type">Updates on "Sensing the World" Challenge presented by Cypress and Hackster</a></p>

            <p class="mt4 absolute bottom-2 right-2"><a href="#" class="link dim c3-dark-type">View All Posts &raquo;</a></p>
          </div>
        </div>

    </div>
  </div>
</section>


      <section class="c3-bg-light-grey mw-100 pa3 pa5-ns">
  <div class="mw8 mw6-m center cf">

    <div class="fl w-100 w-50-m w-25-l pa3">
      <ul class="list pl0 lh-list">
        <li class="f5 mb1"><a href="#" class="link dim c3-dark-type b ttu">Solutions</a></li>
        <li class="f6 pl1"><a href="#" class="link dim c3-dark-type">Internet of Things (IoT)</a></li>
        <li class="f6 pl1"><a href="#" class="link dim c3-dark-type">Aerospace & Defense</a></li>
        <li class="f6 pl1"><a href="#" class="link dim c3-dark-type">Automotive Solutions</a></li>
        <li class="f6 pl1"><a href="#" class="link dim c3-dark-type">Home Appliance</a></li>
        <li class="f6 pl1"><a href="#" class="link dim c3-dark-type">Medical</a></li>
        <li class="f6 pl1"><a href="#" class="link dim c3-dark-type">Consumer Electronics</a></li>
        <li class="f6 pl1"><a href="#" class="link dim c3-dark-type">Communication & Telecom</a></li>
        <li class="f6 pl1"><a href="#" class="link dim c3-dark-type">Industrial</a></li>
        <li class="f6 pl1"><a href="#" class="link dim c3-dark-type">Wireless</a></li>
        <li class="f6 pl1"><a href="#" class="link dim c3-dark-type">Reference Designs</a></li>
      </ul>
    </div>

    <div class="fl w-100 w-50-m w-25-l pa3">
      <ul class="list pl0 lh-list">
        <li class="f5 mb1"><a href="#" class="link dim c3-dark-type b ttu">Products</a></li>
        <li class="f6 pl1"><a href="#" class="link dim c3-dark-type">Wireless Connectivity</a></li>
        <li class="f6 pl1"><a href="#" class="link dim c3-dark-type">WICED Wi-Fi</a></li>
        <li class="f6 pl1"><a href="#" class="link dim c3-dark-type">Bluetooth Low Energy</a></li>
        <li class="f6 pl1"><a href="#" class="link dim c3-dark-type">32-bit ARM® Cortex® MCUs</a></li>
        <li class="f6 pl1"><a href="#" class="link dim c3-dark-type">Programmable System-on-Chip</a></li>
        <li class="f6 pl1"><a href="#" class="link dim c3-dark-type">Universal Serial Bus (USB)</a></li>
        <li class="f6 pl1"><a href="#" class="link dim c3-dark-type">Memory</a></li>
        <li class="f6 pl1"><a href="#" class="link dim c3-dark-type">Touch Sensing</a></li>
        <li class="f6 pl1"><a href="#" class="link dim c3-dark-type">Power Management ICs</a></li>
        <li class="f6 pl1"><a href="#" class="link dim c3-dark-type">Clocks & Buffers</a></li>
      </ul>
    </div>

    <div class="fl w-100 w-50-m w-25-l pa3">
      <ul class="list pl0 lh-list">
        <li class="f5 mb1"><a href="#" class="link dim c3-dark-type b ttu">Design Support</a></li>
        <li class="f6 pl1"><a href="#" class="link dim c3-dark-type">Support &amp; Community</a></li>
        <li class="f6 pl1"><a href="#" class="link dim c3-dark-type">Cypress Developer Community</a></li>
        <li class="f6 pl1"><a href="#" class="link dim c3-dark-type">WICED IoT Community</a></li>
        <li class="f6 pl1"><a href="#" class="link dim c3-dark-type">Knowledge Base</a></li>
        <li class="f6 pl1"><a href="#" class="link dim c3-dark-type">Workshops</a></li>
        <li class="f6 pl1"><a href="#" class="link dim c3-dark-type">Video</a></li>
        <li class="f6 pl1"><a href="#" class="link dim c3-dark-type">Development Kits/Boards</a></li>
        <li class="f6 pl1"><a href="#" class="link dim c3-dark-type">Quality & Reliability</a></li>
        <li class="f6 pl1"><a href="#" class="link dim c3-dark-type">RoHS & Green</a></li>
        <li class="f6 pl1"><a href="#" class="link dim c3-dark-type">Design Partner Program</a></li>
        <li class="f6 pl1"><a href="#" class="link dim c3-dark-type">WICED IoT Partners</a></li>
        <li class="f6 pl1"><a href="#" class="link dim c3-dark-type">Product Roadmaps</a></li>
      </ul>
    </div>

    <div class="fl w-100 w-50-m w-25-l pa3">
      <ul class="list pl0 lh-list">
        <li class="f5 mb1"><a href="#" class="link dim c3-dark-type b ttu">Buy & Sample</a></li>
        <li class="f6 pl1"><a href="#" class="link dim c3-dark-type">Request Samples</a></li>
        <li class="f6 pl1"><a href="#" class="link dim c3-dark-type">Buy Devices & Dev. Kits</a></li>
      </ul>

      <ul class="list pl0 lh-list">
        <li class="f5 mb1"><a href="#" class="link dim c3-dark-type b ttu">About Us</a></li>
        <li class="f6 pl1"><a href="#" class="link dim c3-dark-type">Investors</a></li>
        <li class="f6 pl1"><a href="#" class="link dim c3-dark-type">Careers</a></li>
      </ul>

    </div>

  </div>
</section>

      <footer class="mw-100 c3-bg-navy white pa3 pa5-ns">

<div class="mw8 mw6-m center cf">
  <div class="fl w-100 w-50-m w-25-l pa3">
    <h5 class="lh-copy f6 ttu mb1">Corporate Headquarters</h5>
    <p class="lh-copy f6 mv0 ml1 fw1">Cypress Semiconductor<br>
    198 Champion Court<br>
    San Jose, CA 95134 USA<br>
    Tel: +1-408-943-2600</p>
  </div>

  <div class="fl w-100 w-50-m w-25-l pa3">
    <h5 class="lh-copy f6 ttu mb1">Customer Service Support</h5>
    <p class="lh-copy f6 mv0 ml1 fw1">
    +1-800-541-4736<br>
    Hours:<br>
    8:00AM - 5:00PM (local time)</p>
    <p class="f6"><a href="#" class="link white dim normal">Create a MyCase</a></p>
  </div>

  <div class="fl w-100 w-50-m w-25-l pa3">
    <h5 class="lh-copy f6 ttu mb1">International Support</h5>
    <p class="lh-copy f6 mv0 ml1 fw1">+1-408-943-2600<br>
    United States +1-800-541-4736<br>
    Hours:<br>
    4:30AM - 1:30PM (pacific time)<br>
    7:30PM - 4:30AM (standard time)</p>
  </div>

  <div class="fl w-100 w-50-m w-25-l pa3">
    <h5 class="lh-copy f6 ttu mb1">Other Requests</h5>
    <p class="lh-list f6 mv0 ml1">
    <a href="#" class="link white dim">Contact Us</a><br>
    <a href="#" class="link white dim">Customer Care</a><br>
    <a href="#" class="link white dim">Report a Website Problem</a></p>
  </div>
</div>
<div class="center tc">
  <ul class="list pl0 lh-copy">
    <li class="ttu f6 dib mh3"><a href="#" class="link white dim b">About Us</a></li>
    <li class="ttu f6 dib mh3"><a href="#" class="link white dim b">Careers</a></li>
    <li class="ttu f6 dib mh3"><a href="#" class="link white dim b">Investors</a></li>
    <li class="ttu f6 dib mh3"><a href="#" class="link white dim b">{{ social icons here }}</a></li>
  </ul>

  <div  class="">
    <img src="sites/all/themes/cy/images/social-icons/linkedin-mark.svg" class="svg social-icon linkedin-icon">
    <img src="sites/all/themes/cy/images/social-icons/linkedin-mark.svg" class="svg social-icon youtube-icon">
  </div>




  <p class="f6 mt4">&copy; Cypress Semiconductor Corporation. All rights reserved.</p>
</div>

</footer>


    </main>
