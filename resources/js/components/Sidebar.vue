<template>
    <div class="chat-list">
       <div class="header">

            <div class="search">
                <form>
                    <input id="search" name="search" type="text" placeholder="Search">
                    <button type="submit">df</button>
                </form>
            </div>

            <div class="sidebar-title">
                <h2>iMessenger</h2>
                <p>Chat from your friends</p>
            </div>

        </div>

        <div class="chat-contacts">
            <ul class="chat-links">
                <li>
                    <figure class="avatar">
                        <img src="#" alt="avatar">
                    </figure>
                    <div class="user-list">
                        <div class="user-info">
                            <h5>Andrew Hovards</h5>
                            <p>I have sent you files...</p>
                        </div>
                        <div class="user-list-action">
                            <small>03:41pm</small>
                        </div>
                    </div>
                </li>

                <li>
                    <figure class="avatar">
                        <img src="#" alt="avatar">
                    </figure>
                    <div class="user-list">
                        <div class="user-info">
                            <h5>Andrew Hovards</h5>
                            <p>I have sent you files...</p>
                        </div>
                        <div class="user-list-action">
                            <small>03:41pm</small>
                        </div>
                    </div>
                </li>

                <li>
                    <figure class="avatar">
                        <img src="#" alt="avatar">
                    </figure>
                    <div class="user-list">
                        <div class="user-info">
                            <h5>Andrew Hovards</h5>
                            <p>I have sent you files...</p>
                        </div>
                        <div class="user-list-action">
                            <small>03:41pm</small>
                        </div>
                    </div>
                </li>

                <li>
                    <figure class="avatar">
                        <img src="#" alt="avatar">
                    </figure>
                    <div class="user-list">
                        <div class="user-info">
                            <h5>Andrew Hovards</h5>
                            <p>I have sent you files...</p>
                        </div>
                        <div class="user-list-action">
                            <small>03:41pm</small>
                        </div>
                    </div>
                </li>

                <li>
                    <figure class="avatar">
                        <img src="#" alt="avatar">
                    </figure>
                    <div class="user-list">
                        <div class="user-info">
                            <h5>Andrew Hovards</h5>
                            <p>I have sent you files...</p>
                        </div>
                        <div class="user-list-action">
                            <small>03:41pm</small>
                        </div>
                    </div>
                </li>

                <li>
                    <figure class="avatar">
                        <img src="#" alt="avatar">
                    </figure>
                    <div class="user-list">
                        <div class="user-info">
                            <h5>Andrew Hovards</h5>
                            <p>I have sent you files...</p>
                        </div>
                        <div class="user-list-action">
                            <small>03:41pm</small>
                        </div>
                    </div>
                </li>

                <li>
                    <figure class="avatar">
                        <img src="#" alt="avatar">
                    </figure>
                    <div class="user-list">
                        <div class="user-info">
                            <h5>Andrew Hovards</h5>
                            <p>I have sent you files...</p>
                        </div>
                        <div class="user-list-action">
                            <small>03:41pm</small>
                        </div>
                    </div>
                </li>

                <li>
                    <figure class="avatar">
                        <img src="#" alt="avatar">
                    </figure>
                    <div class="user-list">
                        <div class="user-info">
                            <h5>Andrew Hovards</h5>
                            <p>I have sent you files...</p>
                        </div>
                        <div class="user-list-action">
                            <small>03:41pm</small>
                        </div>
                    </div>
                </li>

                <li>
                    <figure class="avatar">
                        <img src="#" alt="avatar">
                    </figure>
                    <div class="user-list">
                        <div class="user-info">
                            <h5>Andrew Hovards</h5>
                            <p>I have sent you files...</p>
                        </div>
                        <div class="user-list-action">
                            <small>03:41pm</small>
                        </div>
                    </div>
                </li>

                <li>
                    <figure class="avatar">
                        <img src="#" alt="avatar">
                    </figure>
                    <div class="user-list">
                        <div class="user-info">
                            <h5>Andrew Hovards</h5>
                            <p>I have sent you files...</p>
                        </div>
                        <div class="user-list-action">
                            <small>03:41pm</small>
                        </div>
                    </div>
                </li>

                <li>
                    <figure class="avatar">
                        <img src="#" alt="avatar">
                    </figure>
                    <div class="user-list">
                        <div class="user-info">
                            <h5>Andrew Hovards</h5>
                            <p>I have sent you files...</p>
                        </div>
                        <div class="user-list-action">
                            <small>03:41pm</small>
                        </div>
                    </div>
                </li>

                <li>
                    <figure class="avatar">
                        <img src="#" alt="avatar">
                    </figure>
                    <div class="user-list">
                        <div class="user-info">
                            <h5>Andrew Hovards</h5>
                            <p>I have sent you files...</p>
                        </div>
                        <div class="user-list-action">
                            <small>03:41pm</small>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

    </div>
</template>

<script>
    export default {
        
    }
</script>

<style lang="scss" scoped>

.chat-list {
    background-color: #fff;
    border-right: 1px solid #e6e6e6;
    display: flex;
    flex-direction: column;
    max-width: 8rem;
    min-width: 38rem;
    height: 100vh;
    
    .header {

    }
    .chat-contacts {
        overflow-y: auto;
        overflow-x: hidden;
        position: relative;
        height: 100%;
        ul.chat-links {
            display: flex;
            flex-direction: column;
            list-style: none;
            li {
                padding: 17px 30px;
                display: flex;
                cursor: pointer;
                figure.avatar {
                    display: inline-block;
                    border-radius: 50%;
                    width: 2.3rem;
                    height: 2.3rem;
                    img {
                        width: 100%;
                        height: 100%;
                        object-fit: cover;
                    }
                }
                .user-list {
                    position: relative;
                    display: flex;
                    .user-info {
                        display: flex;
                        flex-direction: column;
                    }
                    .user-list-action {
                        padding-left: 15px;
                    }
                }
            }
        }
    }
}

</style>
