import Vue from 'vue'

import DataTheSideBar from './components/DataTheSideBar.vue'

new Vue({
  el: '#sidebar',
  components: {
      DataTheSideBar
  }
});

import DataPortfolio from './components/DataPortfolio.vue'
import DataPortfolioDetail from './components/DataPortfolioDetail.vue'
import DataAbout from './components/DataAbout.vue'
import DataBlog from './components/DataBlog.vue'
import DataBlogDetail from './components/DataBlogDetail.vue'
import VContactMap from './components/VContactMap.vue'

const app = new Vue({
    el: '#app',
    components: {
        DataPortfolio,
        DataPortfolioDetail,
        DataAbout,
        DataBlog,
        DataBlogDetail,
        VContactMap
    }
});