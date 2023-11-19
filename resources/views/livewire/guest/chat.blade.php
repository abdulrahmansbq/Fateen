<div>
    <div class="chat-header" wire:ignore>
        <div class="d-flex align-items-center gap-2">
            <button class="navbar-toggler d-md-none d-block" type="button" data-bs-toggle="collapse"
                    data-bs-target="#mainnavbarNav" aria-controls="mainnavbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                <i class="iconsax" data-icon="text-align-justify"></i>
            </button>
            <a href="index.html" class="logo-icon d-flex d-md-none">
                <img src="{{ asset('assets/svg/logo-icon.svg') }}" class="img-fluid">
            </a>
            <h3 id="targetDiv">قم بكتابة استفسارك</h3>
        </div>
        <div class="header-option">
            <a class="del-btn" data-cursor="pointer" wire:click="destroySession()"><i class="iconsax"
                                                                         data-icon="trash"></i></a>
        </div>
    </div>
    <div class="main-chat">
        <div class="no-chat d-none">
            <div>
                <img src="{{ asset('assets/svg/no-chat.svg') }}" class="img-fluid" alt="">
                <h3>لا توجد أي استفسارات</h3>
            </div>
        </div>
        <div class="msger-chat">
            @foreach($chat?->messages ?? [] as $message)
                <div @class(['msg', 'right-msg' => $message->is_bot, 'left-msg' => !$message->is_bot]) >
                    <div class="msg-bubble">
                        <div class="msg-text">
                            {{ $message->content }}
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="msg right-msg" >
                <div class="msg-bubble" wire:loading style="display: none;">
                    <div class="msg-text">
                        <div class="spinner-grow" style="width: 1rem; height: 1rem;" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-grow" style="width: 1rem; height: 1rem;" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-grow" style="width: 1rem; height: 1rem;" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="msger-inputarea">
            <button class="navbar-toggler d-lg-none d-block msger-send-btn" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"
                    aria-expanded="false" aria-label="Toggle navigation">
                <i class="iconsax" data-icon="text-align-justify"></i>
            </button>
            <input type="text" class="msger-input" placeholder="قم بكتابة الإستفسار هنا..." wire:keydown.enter="sendMessage()"
                   wire:model="question" wire:loading.attr="disabled" />
            <button type="submit" class="msger-send-btn" wire:loading.attr="disabled" id="sendBtn" wire:click="sendMessage()"><i class="iconsax" data-icon="send-1" wire:ignore ></i></button>
        </div>
    </div>
</div>
