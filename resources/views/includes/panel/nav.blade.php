<div>
    <header class="header-cont" id="hdr_cont_id">
        <div class="hdr-cont">
            <img src="{{ asset('/img/tomate.png') }}">
        </div>
        <div class="hdr-cont-1 hdrMenuChat">
            <label class="hdr-cont-1-menu-bgr-1">
                <i class="fi fi-br-menu-burger"></i>
            </label>
        </div>
        <div class="hdr-cont-2">
            @if (Route::currentRouteName() === 'home' || Route::currentRouteName() === 'index/post')
            <input type="search" class="hdr-cont-input">
            <button class="hdr-cont-input-btn">
                <i class="fi fi-rr-search"></i>
            </button>
            @endif
        </div>


        <div class="hdr-cont-3">
            <div class="hdr-cont-3-users">
                <div class="dropdown" id="notification-dropdown">
                    <i class="fi fi-rr-bell" id="notification-icon"></i>

                    <div class="dropdown-content" id="notification-content">
                        <!-- Las notificaciones se cargarán aquí dinámicamente -->
                    </div>
                </div>
            </div>

            <div class="hdr-cont-3-users">
                <div class="dropdown" id="user-dropdown">
                    <i class="fi fi-rr-user"></i>
                    <span class="cont-user-name">
                        <?php
                        $firstName = explode(' ', Auth::user()->name)[0];
                        $lastName = explode(' ', Auth::user()->last_name)[0];
                        echo $firstName . ' ' . $lastName;
                        ?>
                    </span>

                    <i class="fi fi-br-caret-down"></i>
                    <div class="dropdown-content">
                        <a href="{{ route('index/profile') }}">
                            <i class="fi fi-rr-user"></i>
                            <span class="item-text"> Ver Perfil</span>
                        </a>
                        <a href="{{ route('notifications') }}">
                            <i class="fi fi-rr-bell-ring"></i>
                            <span class="item-text"> Notificaciones</span>
                        </a>
                        <a href="{{ route('configurations') }}">
                            <i class="fi fi-rr-settings"></i>
                            <span class="item-text"> Ajustes</span>
                        </a>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('formLogout').submit();">
                            <i class="fi fi-rr-exit"></i><span class="item-text"> Cerrar Sesión</span>
                        </a>
                        <form action="{{ route('logout') }}" method="POST" style="display: none;" id="formLogout">
                            @method('POST')
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
            <label for="swich-2" class="hdr-cont-1-menu-bgr-2 hdr-cont-3-users menuBRG">
                <i class="fi fi-br-menu-burger"></i>
            </label>
        </div>
    </header>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            function loadNotifications() {
                $.ajax({
                    type: 'GET',
                    url: '{{ route('get-notifications') }}',
                    success: function(notifications) {
                        $('#notification-content').empty();

                        if (notifications.length === 0) {
                            $('#notification-content').text('No tiene notificaciones Nuevas');
                        } else {
                            notifications.forEach(function(notification) {
                                var notificationElement = createNotificationElement(
                                    notification);
                                $('#notification-content').append(notificationElement);
                            });
                        }
                    }
                });
            }

            // Función para crear un elemento de notificación en el DOM
            function createNotificationElement(notification) {
                var notificationElement = $('<a>').addClass('notification-link').attr('href', notification.data.url)
                    .attr('data-notification-id', notification.id);
                var customNotification = $('<div>').addClass('custom-notification');
                var customAvatar = $('<div>').addClass('notification-avatar');
                var avatarImage = $('<img>').attr('src', notification.data.profile_image).attr('alt', 'Avatar');
                var customContent = $('<div>').addClass('notification-content');
                var customTitle = $('<div>').addClass('custom-title').text(notification.data.user_name);
                var customDescription = $('<div>').addClass('notification-description').text(notification.data
                    .message);
                var customActions = $('<div>').addClass('notification-actions');
                var customTime = $('<div>').addClass('custom-time').append($('<strong>').text(notification.data
                    .notification_created_at));

                // Construir la estructura
                customAvatar.append(avatarImage);
                customContent.append(customTitle, customDescription);
                customActions.append(customTime);
                customNotification.append(customAvatar, customContent, customActions);
                notificationElement.append(customNotification);

                return notificationElement;
            }

            loadNotifications();
            setInterval(loadNotifications, 30000); // 30 segundos

            $(document).on('click', '.notification-link', function(e) {
                e.preventDefault();

                var notificationId = $(this).data('notification-id');

                $.ajax({
                    type: 'POST',
                    url: '{{ route('mark-as-read') }}',
                    data: {
                        '_token': '{{ csrf_token() }}',
                        'id': notificationId
                    },
                    success: function(response) {}
                });

                window.location.href = $(this).attr('href');
            });
        });
    </script>
