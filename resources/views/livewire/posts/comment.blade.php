<div>
        @auth
        <div class="card my-4">
            <h5 class="card-header mb-3">Leave a Comment</h5>
            <h3 class="mb-3 text-secondary">({{ $total_comments }}) Comments</h3>
            <div class="card-body">
            <form wire:submit.prevent="store" class="mb-3">
                <div class="mb-3">
                    <textarea wire:model.defer="body" rows="2" class="form-control @error('body') is-invalid @enderror" placeholder="Tulis Komentar.."></textarea>
                    @error('body')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
        @endauth
        @guest
            <div class="alert alert-primary" role="alert">
                Login dulu untuk berkomentar <a href="{{ route('login') }}">klik disini</a>
            </div>
        @endguest
        @foreach ($comments as $item)
        <div class="mb-3" id="comment-{{ $item->id }}">
        <div class="d-flex align-items-lg-start mb-3">
        <img src="https://www.gravatar.com/avatar/1a2dc59abe16bd6f16165b76ffc69a50?d=mm&s=100" class="img-fluid rounded-circle me-2" width="40" alt="user_comment">
        <div>
            <div>
                <span>{{ $item->user->name }}</span>
                <span>{{ $item->created_at }}</span>
            </div>
            <div class="text-secondary mb-2">
                {{ $item->body }}
            </div>
            <div>
            @auth
            <button class="btn btn-sm btn-primary" wire:click="selectReply({{ $item->id }})">Balas</button>
            @if ($item->user_id == Auth::user()->id)
            <button class="btn btn-sm btn-warning" wire:click="selectEdit({{ $item->id }})">Edit</button>
            <button class="btn btn-sm btn-danger" wire:click="delete({{ $item->id }})">Hapus</button>
            @endif
            @if (isset($item->hasLike))
            <button wire:click="like({{ $item->id }})" class="btn btn-sm btn-danger">
                <i class="bi bi-heart-fill me-2"></i>
                ({{ $item->totalLikes() }})
            </button>
            @else
            <button wire:click="like({{ $item->id }})" class="btn btn-sm btn-dark">
                <i class="bi bi-heart-fill me-2"></i>
                ({{ $item->totalLikes() }})
            </button>
            @endif
            @endauth
            </div>
            @if (isset($comment_id) && $comment_id == $item->id)
            <form wire:submit.prevent="reply" class="my-3">
                <div class="mb-3">
                    <textarea wire:model.defer="body2" rows="2" class="form-control @error('body2') is-invalid @enderror" placeholder="Tulis Komentar.."></textarea>
                    @error('body2')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            @endif
            
            @if (isset($edit_comment_id) && $edit_comment_id == $item->id)
            <form wire:submit.prevent="change" class="my-3">
                <div class="mb-3">
                    <textarea wire:model.defer="body2" rows="2" class="form-control @error('body2') is-invalid @enderror" placeholder="Tulis Komentar.."></textarea>
                    @error('body2')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-warning">Update</button>
                </div>
            </form>
            @endif
        </div>
        </div>
        @if ($item->childrens)
            @foreach ($item->childrens as $item2)
            <div class="ms-4">
            <div class="d-flex align-items-lg-start ms-4">
            <img src="https://www.gravatar.com/avatar/1a2dc59abe16bd6f16165b76ffc69a50?d=mm&s=100" class="img-fluid rounded-circle me-2" width="40" alt="user_comment">
            <div>
                <div>
                    <span>{{ $item2->user->name }}</span>
                    <span>{{ $item2->created_at }}</span>
                </div>
                <div class="text-secondary mb-2">
                    {{ $item2->body }}
                </div>
                <div>
                    @auth
                    <button class="btn btn-sm btn-primary" wire:click="selectReply({{ $item2->id }})">Balas</button>
                    @if ($item2->user_id == Auth::user()->id)
                    <button class="btn btn-sm btn-warning" wire:click="selectEdit({{ $item2->id }})">Edit</button>
                    <button class="btn btn-sm btn-danger" wire:click="delete({{ $item2->id }})">Hapus</button>
                    @endif
                    @if (isset($item2->hasLike))
                    <button wire:click="like({{ $item2->id }})" class="btn btn-sm btn-danger">
                        <i class="bi bi-heart-fill me-2"></i>
                        ({{ $item2->totalLikes() }})
                    </button>
                    @else
                    <button wire:click="like({{ $item2->id }})" class="btn btn-sm btn-dark">
                        <i class="bi bi-heart-fill me-2"></i>
                        ({{ $item2->totalLikes() }})
                    </button>
                    @endif
                    @endauth
                </div>
            </div>
            </div>
            @if (isset($comment_id) && $comment_id == $item2->id)
            <form wire:submit.prevent="reply" class="my-3 ms-4 col-lg-3">
                <div class="mb-3">
                    <textarea wire:model.defer="body2" rows="2" class="form-control @error('body2') is-invalid @enderror" placeholder="Tulis Komentar.."></textarea>
                    @error('body2')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            @endif
            
            @if (isset($edit_comment_id) && $edit_comment_id == $item2->id)
            <form wire:submit.prevent="change" class="my-3 ms-4 col-lg-3">
                <div class="mb-3">
                    <textarea wire:model.defer="body2" rows="2" class="form-control @error('body2') is-invalid @enderror" placeholder="Tulis Komentar.."></textarea>
                    @error('body2')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-warning">Update</button>
                </div>
            </form>
            @endif
        </div>
            <hr>
            @endforeach
        @endif
        </div>
        @endforeach
</div>
