<template>
  <div>
    <h2>comments <span style="font-size: 10px">we hide names for privcy</span></h2>

    
      <form action="#" @submit.prevent="commentSubmit()">
        
          <textarea
            placeholder="your comment"
            class="textArea form-control"
            v-model="comment"
            name="#"
          ></textarea>
        
        <div>
          <button type="submit" class="press" name="#">add</button>
        </div>
      </form>
    
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("comments comopnents");
  },
  props: ["product_id"],
  data() {
    return {
      comments: [],
      comment: "",
    };
  },
  methods: {
    commentSubmit() {
      axios
        .post("/comments/store", {
          body: this.comment,
          product_id: this.product_id,
        })
        .then(function (response) {
          console.log(response);
        })
        .catch(function (response) {
          console.log(response);
        });
      Event.$emit("commentCreated", {
        body: this.comment,
        product_id: this.product_id,
      });
      this.comment = "";
    },
  },
};
</script>

<style scoped>
.textAres {
  height: 180px;
  padding: 20px 10px 2px 20px;
  margin-bottom: 20px;
 /* width: 100%;*/
  outline: 0;
  
}

.press {
  padding: 0 55px !important;
  line-height: 48px;
  height: 48px;
  font-size: 16px;
  font-weight: 700;
  border: none;
  border-radius: 30px;
  box-shadow: none;
  text-transform: uppercase;
  background: #4fb68d !important;
  display: block;
  color: #fff !important;
  width: 200px;
  -webkit-transition: all 0.3s linear;
  -moz-transition: all 0.3s linear;
  -ms-transition: all 0.3s linear;
  -o-transition: all 0.3s linear;
  transition: all 0.3s linear;
  margin: 10px;
}
</style>