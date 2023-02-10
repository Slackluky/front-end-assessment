<script setup>
import Card from "./components/Card.vue";
import SearchInput from "./components/SearchInput.vue";
import Button from "./components/Button.vue";
import { onMounted, reactive } from "vue";

const products = reactive([]);
onMounted(() => {
    fetch("http://localhost:8080/products", {
        headers: {
            "Content-Type": "application/json"
        }
    })
        .then((response) => response.json())
        .then((data) => products.push(...data));
});
</script>
<template>
    <div class="container space-y-4 w-screen">
        <div class="flex justify-center space-x-2">
            <SearchInput />
            <Button>Add Item</Button>
        </div>
        <div class="flex justify-center space-x-4 w-full">
            <div v-for="(k, v) in products" :key="v">
                <Card :name="`Product ${v + 1}`" />
            </div>
        </div>
    </div>
</template>

<style scoped>
.logo {
    height: 6em;
    padding: 1.5em;
    will-change: filter;
    transition: filter 300ms;
}
.logo:hover {
    filter: drop-shadow(0 0 2em #646cffaa);
}
.logo.vue:hover {
    filter: drop-shadow(0 0 2em #42b883aa);
}
</style>
