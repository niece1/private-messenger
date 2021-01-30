<template>
    <div class='root'>
        <nav>
            <Navbar/>
        </nav>
        <aside>
            <Sidebar/>
        </aside>
        <main>
            <Chat/>
        </main>
    </div>
</template>

<script>
import Navbar from './Navbar.vue'
import Sidebar from './Sidebar.vue'
import Chat from './Chat.vue'

export default {
    name: 'App',
    components: {
        Navbar,
        Sidebar,
        Chat
    }
}
</script>

<style lang='scss' scoped>
.root {
    width: 100%;

    display: flex;
    flex-wrap: wrap;
}


</style>
