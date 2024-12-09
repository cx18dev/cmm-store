@extends('probes')

<title>@yield('title', $category->name . ' | CMM Online Store')</title>

@section('category')
    <div class="col-md-10 p-4 category">

        @include('layouts.partials.probe-nav')

        <div class="cate-sec">
            @if ($category->slug == 'RBE-repair-by-exchange')
                <h2 class="category-title"><u>Upgrade PH9 probe head only to PH10T OR PH10M OR PH10MQ PLUS Probe head
                        only</u></h2>
            @else
                <h2 class="category-title"><u>{{ $category->name }}</u></h2>
            @endif
            <div class="row">
                @forelse ($probes as $probe)
                    <div class="col-md-4 p-3">
                        <a class="card shadow-sm"
                            href="{{ route('probes', ['category' => $category->slug, 'probes' => $probe->slug]) }}">
                            <img src="{{ asset('assets/admin/probes/' . $probe->image) }}" alt="{{ $probe->name }}">
                            <div class="info">
                                <h5 class="title">{{ $probe->name }}</h5>
                                <p class="desc">
                                    {{ $probe->description }}
                                </p>
                            </div>
                        </a>
                    </div>
                @empty
                    @if ($category->slug == 'RBE-repair-by-exchange')
                        <div class="col-12 infobox">
                            <div class="text-center">
                                <img src="{{ asset('assets/images/RBE-repair-by-exchange.jpg') }}" alt="Coming Soon">
                            </div>
                        </div>

                        <section class="cust-form-sec relative shadow">
                            <h3 class="text-center">Get a Quote</h3>
                            <div class="cust-discount">
                                <img src="https://cmmstore.com/assets/images/discount.png" alt="cust-discount"
                                    class="cust-img">
                            </div>
                            <div id="product-form">
                                <div class="my-4 mb-2">
                                    <div class="select-product">
                                        <div class="table-responsive">
                                            <table class="table text-center">
                                                <thead>
                                                    <tr>
                                                        <th class="fw-bold" style="width: 5%;"></th>
                                                        <th class="fw-bold" style="width: 30%;">Part Number</th>
                                                        <th class="fw-bold" style="width: 30%;">Upgrade to</th>
                                                        <th class="fw-bold" style="width: 30%;">Renishaw List Price</th>
                                                        <th class="fw-bold" style="width: 30%;">Our Discounted Price</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <input class="form-check-input mt-0" type="checkbox"
                                                                id="part-1-probe-1"
                                                                data-part="{&quot;id&quot;:1,&quot;probe_id&quot;:1,&quot;name&quot;:&quot;A-5863-5000&quot;,&quot;title&quot;:&quot;PH10T PLUS probe head only&quot;,&quot;price&quot;:&quot;22174&quot;,&quot;discount&quot;:&quot;20&quot;,&quot;status&quot;:&quot;1&quot;,&quot;created_at&quot;:&quot;2024-11-27T13:58:44.000000Z&quot;,&quot;updated_at&quot;:&quot;2024-11-27T22:18:11.000000Z&quot;,&quot;probe&quot;:&quot;PH10T PLUS&quot;,&quot;probe_img&quot;:&quot;https:\/\/cmmstore.com\/assets\/admin\/probes\/1732527714.jpg&quot;,&quot;probe_link&quot;:&quot;https:\/\/cmmstore.com\/CMM-probes\/3-axis-motorized-probe-heads\/PH10T-PLUS&quot;}">
                                                        </td>
                                                        <td>
                                                            <label for="part-1-probe-1">A-1032-0091</label>
                                                        </td>
                                                        <td>
                                                            <label for="part-1-probe-1">PH10T</label>
                                                        </td>
                                                        <td>
                                                            <label for="part-1-probe-1">$6,695.00</label>
                                                        </td>
                                                        <td>
                                                            <label id="discounted-price"
                                                                for="discounted-price-part-1-probe-1">
                                                                $6,025.00
                                                            </label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input class="form-check-input mt-0" type="checkbox"
                                                                id="part-1-probe-1"
                                                                data-part="{&quot;id&quot;:1,&quot;probe_id&quot;:1,&quot;name&quot;:&quot;A-5863-5000&quot;,&quot;title&quot;:&quot;PH10T PLUS probe head only&quot;,&quot;price&quot;:&quot;22174&quot;,&quot;discount&quot;:&quot;20&quot;,&quot;status&quot;:&quot;1&quot;,&quot;created_at&quot;:&quot;2024-11-27T13:58:44.000000Z&quot;,&quot;updated_at&quot;:&quot;2024-11-27T22:18:11.000000Z&quot;,&quot;probe&quot;:&quot;PH10T PLUS&quot;,&quot;probe_img&quot;:&quot;https:\/\/cmmstore.com\/assets\/admin\/probes\/1732527714.jpg&quot;,&quot;probe_link&quot;:&quot;https:\/\/cmmstore.com\/CMM-probes\/3-axis-motorized-probe-heads\/PH10T-PLUS&quot;}">
                                                        </td>
                                                        <td>
                                                            <label for="part-1-probe-1">A-1032-0092</label>
                                                        </td>
                                                        <td>
                                                            <label for="part-1-probe-1">PH10M</label>
                                                        </td>
                                                        <td>
                                                            <label for="part-1-probe-1">$6,695.00</label>
                                                        </td>
                                                        <td>
                                                            <label id="discounted-price"
                                                                for="discounted-price-part-1-probe-1">
                                                                $6,025.00
                                                            </label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input class="form-check-input mt-0" type="checkbox"
                                                                id="part-1-probe-1"
                                                                data-part="{&quot;id&quot;:1,&quot;probe_id&quot;:1,&quot;name&quot;:&quot;A-5863-5000&quot;,&quot;title&quot;:&quot;PH10T PLUS probe head only&quot;,&quot;price&quot;:&quot;22174&quot;,&quot;discount&quot;:&quot;20&quot;,&quot;status&quot;:&quot;1&quot;,&quot;created_at&quot;:&quot;2024-11-27T13:58:44.000000Z&quot;,&quot;updated_at&quot;:&quot;2024-11-27T22:18:11.000000Z&quot;,&quot;probe&quot;:&quot;PH10T PLUS&quot;,&quot;probe_img&quot;:&quot;https:\/\/cmmstore.com\/assets\/admin\/probes\/1732527714.jpg&quot;,&quot;probe_link&quot;:&quot;https:\/\/cmmstore.com\/CMM-probes\/3-axis-motorized-probe-heads\/PH10T-PLUS&quot;}">
                                                        </td>
                                                        <td>
                                                            <label for="part-1-probe-1">A-1032-0912</label>
                                                        </td>
                                                        <td>
                                                            <label for="part-1-probe-1">PH10MQ</label>
                                                        </td>
                                                        <td>
                                                            <label for="part-1-probe-1">$6,695.00</label>
                                                        </td>
                                                        <td>
                                                            <label id="discounted-price"
                                                                for="discounted-price-part-1-probe-1">
                                                                $6,025.00
                                                            </label>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <img id="AddToCart" src="{{ asset('assets/images/add-to-cart.png') }}" alt="Add to cart"
                                        style="width: 15%; cursor: pointer;">
                                </div>
                            </div>
                        </section>
                    @else
                        <div class="col-12 infobox">
                            <div class="text-center">
                                <img src="{{ asset('assets/thumbnails/coming-soon.png') }}" alt="Coming Soon">
                            </div>
                        </div>
                    @endif
                @endforelse
            </div>
        </div>

    </div>
@endsection
