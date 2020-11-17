<template>
  <div>
    <div v-for="comment in comments" :key="comment.id" class="review-bottom">
      <div class="comment">
        <p class="text">{{ comment.body }}</p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["product_id"],
  data() {
    return {
      comments: [],
      //comment: ""
    };
  },
  created() {
    this.getComments();
    Event.$on("commentCreated", (body) => {
      this.comments.push(body);
    });
  },

  methods: {
    getComments() {
      axios.get("/comments/" + this.product_id).then((response) => {
        this.comments = response.data;
      });
    },
  },
};
</script>

<style scoped>
.comment {
  overflow: hidden;
  font-size: 15px;
  background: #fff;
  line-height: 24px;
  text-align: left;
  padding: 40px 30px 30px 30px;
  border: 1px solid #ebebeb;
  margin: 10px;
}
.text {
  margin: 0;
  width: 93%;
}
</style>