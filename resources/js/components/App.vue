<template>
    <div>
        <p class="ft">Hj</p>
        <Navigation />
        <router-view />
    </div>
</template>

<script>
import Navigation from './Navigation.vue'
    export default {
        name: "App",
        components: {
            Navigation
        }
    }
</script>

<style lang="scss" scoped>

p.ft {
    color: red;
}

</style>
