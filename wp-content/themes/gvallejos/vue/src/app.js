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
import VBlogDetail from './components/VBlogDetail.vue'
import DataContact from './components/DataContact.vue'

const app = new Vue({
    el: '#app',
    components: {
        DataPortfolio,
        DataPortfolioDetail,
        DataAbout,
        DataBlog,
        VBlogDetail,
        DataContact
    }
});