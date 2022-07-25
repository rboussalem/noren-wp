// import external dependencies
import 'jquery';

// Import everything from autoload
import './autoload/**/*'

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());


// font awesome
import { library, dom } from '@fortawesome/fontawesome-svg-core';

import { faHourglassHalf, faCalendar} from '@fortawesome/free-solid-svg-icons';
// import { faCalendar } from '@fortawesome/free-regular-svg-icons';
// import { } from '@fortawesome/free-brands-svg-icons';

// add the imported icons to the library
library.add(faCalendar, faHourglassHalf);

// tell FontAwesome to watch the DOM and add the SVGs when it detects icon markup
dom.watch();


