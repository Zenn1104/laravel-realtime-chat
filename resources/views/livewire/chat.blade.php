<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-base-200 overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-6 text-base-300">           
                    <div wire:poll>
                        @foreach ($messages as $message)
                        <div @class(['chat chat-start', 'chat-end' => $message->from_user_id == auth()->id()])>
                            <div class="chat-image avatar">
                            <div class="w-10 rounded-full">
                                <img alt="Tailwind CSS chat bubble component" src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                            </div>
                            </div>
                            <div class="chat-header">
                            {{ $message->fromUser->name }}
                            <time class="text-xs opacity-50">{{ $message->created_at->diffForHumans() }}</time>
                            </div>
                            <div class="chat-bubble">{{ $message->message }}</div>
                            <div class="chat-footer opacity-50">
                            Delivered
                            </div>
                        </div>
                        </div>
                    @endforeach
                    </div>
                    <div class="form-control">
                        <form action="" wire:submit.prevend="sendMessage">
                            <textarea class="textarea textarea-bordered w-full" wire:model="message" placeholder="type here..."></textarea>
                            <button type="submit" class="btn btn-primary">Send</button>
                        </form>
                    </div>                   
                </div>
            </div>
        </div>
    </div>
</div>
</div>