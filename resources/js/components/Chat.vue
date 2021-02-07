<template>
    <div class="user-chat">
        <div class="chat-header">
            <figure class="avatar">
                <img src="#" alt="avatar">
            </figure>
            <div class="chat-user-list">
                <div class="chat-user-info">
                    <h5>Andrew Hovards</h5>
                    <small>5 minutes ago</small>
                </div>
                <div class="chat-header-action">
                    <ul>
                        <li>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="chat-body">
            <div class="messages">
                <div class="outbound-message">
                </div>
                <div class="inbound-message">
                </div>
            </div>
        </div>
        <div class="chat-footer">
            <form>
                <input id="search" name="search" type="text" placeholder="Search">
                <button type="submit">df</button>
            </form>
        </div>
    </div>
</template>

<script>
    export default {
        
    }
</script>

<style lang='scss' scoped>
.user-chat {
    width: 100%;
    height: 100vh;
    display: flex;
    .chat-header {
        border-bottom: 1px solid #e6e6e6;
        display: flex;
        justify-content: space-between;
        padding: 17px 30px;
    }
    .chat-body {
        position: relative;
        height: 100%;
        overflow: auto;
        .messages {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
    }
    .chat-footer {
        border-top: 1px solid #e6e6e6;
        padding: 17px 30px;
        position: fixed;
        bottom: 0;
        width: 100%;
    }
}
</style>
