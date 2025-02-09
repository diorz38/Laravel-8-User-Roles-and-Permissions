<x-app-layout>
    <div class="page-wrapper">
        <div class="container-xl">
        </div>
        </div></x-slot name="header"><div class="page-header d-print-none">
            <div class="container-xl d-flex flex-column justify-content-center">
                <div class="empty">
                    <div class="empty-img"><img src="./static/illustrations/undraw_printing_invoices_5r4r.svg"
                            height="128" alt="">
                    </div>
                    <p class="empty-title">No results found</p>
                    <p class="empty-subtitle text-muted">
                        Try adjusting your search or filter to find what you're looking for.
                    </p>
                    <div class="empty-action">
                        <a href="./." class="btn btn-primary">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <line x1="12" y1="5" x2="12" y2="19" />
                                <line x1="5" y1="12" x2="19" y2="12" /></svg>
                            Add your first client
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <x-tabler.footer/>
    </div>
</x-app-layout>
