@php
    /** @var \App\Models\BlogCategory $item*/
@endphp

<div class="roew justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="card-title"> </div>
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">

                        <a href="#maindata" class="nav-link active" data-toggle="tab" role="tab"> main info</a>
                    </li>
                </ul>
                <br>
                <div class="tab-content">
                    <div class="tab-pane active" id="maindata" role="tabpanel">
                        <div class="form-group">
                            <label for="title">Header</label>
                            <input type="text" name="title" id="title" value="{{ $item->title }}" class="form-control"
                                minlength="3" required>
                        </div>
                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <input type="text" name="slug" id="slug" value="{{ $item->slug }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="parent_id">Parent</label>
                            <select name="parent_id" id="parent_id" placeholder="chose categroy" class="form-control"
                                required>

                                @foreach($categoryList as $item)
                                    <option value="{{ $item->id }} ">
                                        @if($item->id == $item->parent_id) selected
                                        @endif
                                        {{ $item->id }} . {{ $item->title }}
                                    </option>

                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" value="{{ $item->slug }}"
                                class="form-control" rows="3">

                                {{ $item->description }}
                            </textarea>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
