@extends('layouts.master')

@section('title', 'XBOX - About')

@section('content')
    <div class="container main-text">
        <h1 class="text-center pb-3">About</h1>

        <table class="table table-dark table-bordered table-hover">
            <thead>
                <th></th>
                <th>Xbox</th>
                <th>Xbox 360</th>
                <th>Xbox One</th>
                <th>Xbox One X</th>
                <th>Xbox Series S</th>
                <th>Xbox Series X</th>
            </thead>
            <tbody>
                <tr>
                    <td><b>Processor</b></td>
                    <td>32-bit 733 MHz, custom Intel Pentium III</td>
                    <td>3.2 GHz PowerPC Tri-Core Xenon</td>
                    <td>Custom AMD 8-core APU (2 quad-core Jaguar modules) 1.75 GHz</td>
                    <td>Custom 8 core CPU at 2.3GHz</td>
                    <td>Custom 3.6 GHz AMD Zen 2</td>
                    <td>Custom 8x Cores @ 3.8 GHz (3.6 GHz w/ SMT) AMD Zen 2 </td>
                </tr>
                <tr>
                    <td><b>GPU</b></td>
                    <td>AMD</td>
                    <td>AMD</td>
                    <td>AMD</td>
                    <td>AMD</td>
                    <td>AMD</td>
                    <td>AMD</td>
                </tr>
                <tr>
                    <td><b>RAM</b></td>
                    <td>64 MB</td>
                    <td>512 MB</td>
                    <td>8 GB</td>
                    <td>12 GB</td>
                    <td>8 GB/128-bit & 2 GB/32-bit</td>
                    <td>16 GB</td>
                </tr>
                <tr>
                    <td><b>Storage</b></td>
                    <td>8 - 10 GB</td>
                    <td>250 GB - 320 GB</td>
                    <td>500 GB - 1 TB</td>
                    <td>500 GB - 1 TB</td>
                    <td>512 GB</td>
                    <td>1 TB</td>
                </tr>
                <tr>
                    <td><b>Display (Resolution)</b></td>
                    <td>480p</td>
                    <td>720p - 1080p</td>
                    <td>900p - 1080p</td>
                    <td>1080p - 1440p - 2160p</td>
                    <td>1080p - 1440p - 2160p</td>
                    <td>1080p - 1440p - 2160p</td>
                </tr>
                <tr>
                    <td><b>Price (At Launch)</b></td>
                    <td>$299, €299, £249</td>
                    <td>$399, €399, £279</td>
                    <td>$499, €499, £449</td>
                    <td>$499, €499, £449</td>
                    <td>$299, €299, £249</td>
                    <td>$499, €499, £449</td>
                </tr>
            </tbody>
        </table>

        <div>
            <img class="about-xbox-picture mt-5" src="/img/XBOX-SERIES-X-PC.png" alt="xbox series x" width="100%">
        </div>
    </div>
@endsection