<template>
  <div class="container pb-5">
    <div class="article">
      <div class="article_inner">
        <a @click="$router.go(-1)" title="Powrót"><mdb-icon  icon="chevron-left" /> powrót</a>
        <hr>
        <p class="text-right">
         {{ post.created }}
        </p>
        <h4 class="text-center font-weight-bold">
         {{ post.title }}<br>
         <small>{{ post.subtitle }}</small>
        </h4>
        <div class="text-center">
          <img :src="'http://localhost/DawidPlociennikDev.github.io/admin/uploads/' + post.photo" class="img-thumbnail my-3 mx-auto">
        </div>
        <div>
         <span v-html="tagsDesc(post.description)"></span>
        </div>
      </div>
    </div>
  </div>
</template>

<style>
.container {
  margin-top: 45px;
  padding-bottom: 45px;
}

.article_inner {
    background: rgba(255,255,255, .6);
    padding: 30px;
    position: relative;
    opacity: 1;
    text-align: left;
    border-radius: 3px;
 }

.special-ul {
  list-style: none;
  margin-left: 0;
  padding-left: 0;
}

.special-dot {
  padding-left: 1em;
  text-indent: -1em;
}

.special-dot:before {
  content: "›";
  padding-right: 5px;
  color: #42b983;
}

.special-text {
  font-weight: 700;
}
</style>

<script>
import { mdbContainer, mdbRow, mdbCol, mdbCard, mdbCardImage, mdbCardHeader, mdbCardBody, mdbCardTitle, mdbCardText, mdbCardFooter, mdbCardUp, mdbCardAvatar, mdbCardGroup, mdbBtn, mdbView, mdbMask, mdbIcon } from 'mdbvue';
import axios from 'axios';

export default {
  name: 'Article',
  data() {
      return {
          id: this.$route.params.id,
          post: []
      }
  },
  async created() {
    const api = 'http://dawidplociennikdev.przedprojekt.com/admin/articles/apiOne/'+this.id;
    try {
      const res = await axios.get(api);
      this.post =  res.data;
      console.log(this.post);
    } catch(err) {
        console.log(err);
    }
  },
  methods: {
    tagsDesc(input) {
        return input;
    }
  },
	components: {
		mdbContainer,
		mdbRow,
		mdbCol,
		mdbCard,
		mdbCardImage,
		mdbCardHeader,
		mdbCardBody,
		mdbCardTitle,
		mdbCardText,
		mdbCardFooter,
		mdbCardUp,
		mdbCardAvatar,
		mdbCardGroup,
		mdbBtn,
		mdbView,
		mdbMask,
		mdbIcon
	}
}
</script>