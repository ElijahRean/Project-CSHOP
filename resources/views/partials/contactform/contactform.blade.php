<link rel="stylesheet" href="css/contactform.css">

<div>
    <div class="contact-form-wrapper d-flex justify-content-center">
        <form action="{{ route('contact.send') }}" method="POST" class="contact-form">
            @csrf
            <h5 class="title">Contact us</h5>
            <p class="description">Feel free to contact us if you have any sweet special request!</p>
            <div>
                <input type="text" class="form-control rounded border-white mb-3 form-input" id="name"
                    placeholder="Name" required>
            </div>
            <div>
                <input type="email" class="form-control rounded border-white mb-3 form-input" placeholder="Email"
                    required>
            </div>
            <div>
                <textarea id="message" class="form-control rounded border-white mb-3 form-text-area" rows="5" cols="30"
                    placeholder="Your sweet request :)" required>{{ old('message') }}</textarea>
            </div>

            {{-- Alert message --}}
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="submit-button-wrapper">
                <input type="submit" value="Send">
            </div>
        </form>
    </div>
</div>
