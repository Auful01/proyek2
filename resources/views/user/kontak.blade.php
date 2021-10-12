@extends('user.main')


@section('content')
<section class="my-5">
    <div class="container">
        <div class="row m-0">
            <div class="col-12 text-center">
                <h1 class="text-success">Kontak Kami</h1>
            </div>
        </div>
    </div>
</section>

<section class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-5">
                <form>
                    <div class="form-group">
                        <label for="fullname">Fullname</label>
                        <input type="text" class="form-control" id="fullname" name="fullname"
                            placeholder="Enter fullname">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="Enter email address">
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" class="form-control" id="subject" name="subject"
                            placeholder="Enter subject">
                    </div>
                    <div class="form-group">
                        <label for="Message">Message</label>
                        <textarea class="form-control" id="Message" name="message" rows="3"
                            placeholder="Enter messages"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Send Message</button>
                </form>
            </div>
            <div class="col-md-6">
                <div class="content__contact mb-3">
                    <h5 class="font-weight-bold text-success">KANGLOAK</h5>
                    <p class="m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, officia ullam
                        laudantium similique nam possimus nobis minus facilis, nesciunt aspernatur id at placeat
                        alias? Provident qui aliquam ducimus. Error fugiat, quibusdam accusamus doloremque dicta
                        laboriosam, nisi maiores voluptates, modi repudiandae ducimus iure delectus. Sint sequi
                        facere iusto ex est! Itaque?</p>
                </div>
                <div class="d-flex align-items-center justify-content-start mb-3">
                    <i class="fab fa-instagram fa-lg text-success"></i>
                    <p class="ml-3 m-0">@kangloak</p>
                </div>
                <div class="d-flex align-items-center justify-content-start mb-3">
                    <i class="fab fa-instagram fa-lg text-success"></i>
                    <p class="ml-3 m-0">@kangloak</p>
                </div>
                <div class="d-flex align-items-center justify-content-start mb-3">
                    <i class="fab fa-instagram fa-lg text-success"></i>
                    <p class="ml-3 m-0">@kangloak</p>
                </div>
                <div class="d-flex align-items-center justify-content-start mb-3">
                    <i class="fab fa-instagram fa-lg text-success"></i>
                    <p class="ml-3 m-0">@kangloak</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="my-5">
    <div class="container">
        <div class="row m-0">
            <div class="col-md-6">
                <h4 class="text-success mb-3">KangLoak</h4>
                <p>
                    <a href="" class="text-dark">Layanan</a>
                </p>
                <p>
                    <a href="" class="text-dark">Tentang Kami</a>
                </p>
                <p>
                    <a href="" class="text-dark">Kontak Kami</a>
                </p>
            </div>
            <div class="col-md-6">
                <h3>Dapatkan aplikasi KangLoak di</h3>
                <img src="./assets/img/playstore.png" width="300" alt="">
            </div>
        </div>
    </div>
</section>

<section class="mt-5 bg-light">
    <div class="row m-0">
        <div class="col-12 text-center py-4">
            <img src="./assets/img/logo2.png" width="100" alt="">
            <br>
            <small>Copyright &copy; 2021. Pyhtagoras Team. KangLoak</small>
        </div>
    </div>
</section>
@endsection
