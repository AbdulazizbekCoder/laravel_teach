<x-loyaut.main>

    <x-slot:title>
        create post
    </x-slot:title>

    <x-loyaut.header>

        <x-slot:pagetitle>
            Yangi post yaratish
        </x-slot:pagetitle>

    </x-loyaut.header>


    <div class="container">
        <div class="col-lg-7 mb-5 mb-lg-0">
            <div class="contact-form">
                <div id="success"></div>

                <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="col-sm-12 control-group mb-4">
                            <input type="text" class="form-control p-4" name="title" value="{{old('title')}}"
                                   placeholder="Post sarlavha"/>
                            @error('title')
                            <p class="help-block text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col-sm-12 control-group mb-4">
                            <input type="file" class="form-control p-4" name="photo" placeholder="Rasm"/>
                            @error('photo')
                            <p class="help-block text-danger">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="control-group mb-4">
                        <textarea type="text" class="form-control p-4" id="subject" name="short_content"
                                  placeholder="Qisqacha mazmun">{{old('short_content')}}</textarea>
                        @error('short_content')
                        <p class="help-block text-danger">{{$message}}</p>
                        @enderror</div>
                    <div class="control-group mb-4">
                        <textarea class="form-control p-4" rows="6" id="message" name="text"
                                  placeholder="Maq'ola">{{old('text')}}</textarea>
                        @error('text')
                        <p class="help-block text-danger">{{$message}}</p>
                        @enderror                    </div>
                    <div>
                        <button class="btn btn-primary btn-block py-3 px-5" type="submit" id="sendMessageButton">Saqlash
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</x-loyaut.main>
