<?php get_header(); ?>
<body <?php body_class(); ?>>
  <div class="left">
  	<?php get_sidebar(); ?>
  </div><!-- left -->
  <div class="right">
    <div id="content">
        <ul class="splitter">
          <li>Filter by type:
            <ul>
              <li class="segment-1 selected-1"><a href="#" data-value="all">Everything</a></li>
              <li class="segment-0"><a href="#" data-value="app">Applications</a></li>
              <li class="segment-2"><a href="#" data-value="util">Utilities</a></li>
            </ul>
          </li>
          <li>Sort by:
            <ul>
              <li class="segment-1 selected-1"><a href="http://razorjack.net/quicksand/#" data-value="name">Name</a></li>
              <li class="segment-2"><a href="http://razorjack.net/quicksand/#" data-value="size">Size</a></li>
            </ul>
          </li>
        </ul>

        <div class="demo">
          <!-- read the documentation to understand what’s going on here -->
          <ul id="list" class="image-grid">
            <li data-id="id-1" class="util">
              <img src="./jQuery Quicksand plugin_files/activity-monitor.png" width="128" height="128" alt="">
              <strong>Activity Monitor</strong>
              <span>348 KB</span>
            </li>
            <li data-id="id-2" class="app">
              <img src="./jQuery Quicksand plugin_files/address-book.png" width="128" height="128" alt="">
              <strong>Address Book</strong><span>1904 KB</span>
            </li>
            <li data-id="id-3" class="app">
              <img src="./jQuery Quicksand plugin_files/finder.png" width="128" height="128" alt="">
              <strong>Finder</strong>
              <span>1337 KB</span>
            </li>
            <li data-id="id-4" class="app">
              <img src="./jQuery Quicksand plugin_files/front-row.png" width="128" height="128" alt="">
              <strong>Front Row</strong>
              <span>401 KB</span>
            </li>
            <li data-id="id-5" class="app">
              <img src="./jQuery Quicksand plugin_files/google-pokemon.png" width="128" height="128" alt="">
              <strong>Google Pokémon</strong>
              <span>12875 KB</span>
            </li>
            <li data-id="id-6" class="app">
              <img src="./jQuery Quicksand plugin_files/ical.png" width="128" height="128" alt="">
              <strong>iCal</strong>
              <span>5273 KB</span>
            </li>
            <li data-id="id-7" class="app">
              <img src="./jQuery Quicksand plugin_files/ichat.png" width="128" height="128" alt="">
              <strong>iChat</strong>
              <span>5437 KB</span>
            </li>
            <li data-id="id-8" class="app">
              <img src="./jQuery Quicksand plugin_files/interface-builder.png" width="128" height="128" alt="">
              <strong>Interface Builder</strong>
              <span>2764 KB</span>
            </li>
            <li data-id="id-9" class="app">
              <img src="./jQuery Quicksand plugin_files/ituna.png" width="128" height="128" alt="">
              <strong>iTuna</strong>
              <span>17612 KB</span>
            </li>
            <li data-id="id-10" class="util">
              <img src="./jQuery Quicksand plugin_files/keychain-access.png" width="128" height="128" alt="">
              <strong>Keychain Access</strong>
              <span>972 KB</span>
            </li>
            <li data-id="id-11" class="util">
              <img src="./jQuery Quicksand plugin_files/network-utility.png" width="128" height="128" alt="">
              <strong>Network Utility</strong>
              <span>245 KB</span>
            </li>
            <li data-id="id-12" class="util">
              <img src="./jQuery Quicksand plugin_files/sync.png" width="128" height="128" alt="">
              <strong>Sync</strong>
              <span>3788 KB</span>
            </li>
            <li data-id="id-13" class="app">
              <img src="./jQuery Quicksand plugin_files/textedit.png" width="128" height="128" alt="">
              <strong>TextEdit</strong>
              <span>1669 KB</span>
            </li>
          </ul>
        </div>
		</div>
  </div> <!-- right -->

</body>
<?php wp_footer(); /* this is used by many Wordpress features and plugins to work proporly */ ?>
</body>
</html>
