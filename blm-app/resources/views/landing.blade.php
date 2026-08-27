@extends('layouts.app')

@section('title', 'Landing')

@section('content')
<!-- Hero Section -->
<section class="relative pt-2xl pb-2xl px-margin-desktop overflow-hidden border-b border-outline-variant bg-surface-container-lowest">
<div class="absolute inset-0 grid-pattern opacity-50"></div>
<div class="max-w-max-width mx-auto relative z-10 flex flex-col items-center text-center">
<div class="inline-flex items-center justify-center p-sm bg-tertiary-fixed text-on-tertiary-fixed rounded-full mb-lg shadow-sm border border-outline-variant/30">
<span class="material-symbols-outlined text-sm mr-xs" data-icon="account_balance">account_balance</span>
<span class="font-label-sm text-label-sm uppercase tracking-wider px-2">Legislative Council</span>
</div>
<h1 class="font-display text-display text-primary max-w-4xl mb-lg">
                    Official Portal of the Student Legislative Council<br/>
<span class="text-on-surface-variant font-headline-lg text-headline-lg mt-md block">Faculty of Computer Science</span>
</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mb-xl">
                    Ensuring transparency, accountability, and the effective representation of student aspirations within the academic environment.
                </p>
<div class="flex gap-md">
<button class="bg-primary text-on-primary px-xl py-md rounded font-label-md text-label-md hover:bg-primary-container transition-colors shadow-sm">
                        Submit Aspiration
                    </button>
<button class="border border-primary text-primary px-xl py-md rounded font-label-md text-label-md hover:bg-surface-container transition-colors">
                        View Audit Reports
                    </button>
</div>
</div>
</section>
<!-- About Us Section -->
<section class="py-2xl px-margin-desktop bg-surface">
<div class="max-w-max-width mx-auto grid md:grid-cols-2 gap-2xl items-center">
<div>
<h2 class="font-headline-lg text-headline-lg text-primary mb-lg">About BLM FIK</h2>
<p class="font-body-md text-body-md text-on-surface-variant mb-md">
                        The Student Legislative Council (Badan Legislatif Mahasiswa) of the Faculty of Computer Science serves as the highest representative body for students. Our core mandate is to legislate, oversee, and represent the student body's interests.
                    </p>
<p class="font-body-md text-body-md text-on-surface-variant">
                        We act as a crucial check and balance system, actively auditing the executive body (BEM) to ensure all programs and aspirations align with the faculty's strategic goals and benefit the student community directly.
                    </p>
</div>
<div class="relative h-64 md:h-full min-h-[300px] rounded-lg border border-outline-variant overflow-hidden shadow-sm bg-surface-container-lowest">
<div class="bg-cover bg-center w-full h-full absolute inset-0" data-alt="A modern, bright, professional boardroom setting in a university building, featuring a sleek wooden table, modern ergonomic chairs, and large windows letting in natural light. The atmosphere is academic, authoritative, yet transparent and welcoming. The color palette includes professional blues, pristine whites, and warm wood tones. Minimalist and high-quality aesthetic." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCbBDAjqf7QZdTC95_yVW8t0vPaDwwY1j2tv3X5EgPhlEMPV00mVKc25fLZoFegHwzfK1psWx5-mWXhtY1OVSenuyV9dfuu9zFV5PR6r_DnaOWqKqXQQiKNK3DN5VRIW6AFSUHGcTz1X6lRp_q7NGpXfQT4xlgTnZXzFCLEAeATcbi2oyJUHDU0k5VU39ljn0VOdy6srwg1VrLZ3B1EUS5APhHO7spgCFhs_v5YP2MQoBVjCC7ocQ')"></div>
</div>
</div>
</section>
<!-- Vision & Mission Section -->
<section class="py-2xl px-margin-desktop bg-surface-container-low border-y border-outline-variant">
<div class="max-w-max-width mx-auto">
<div class="text-center mb-xl">
<h2 class="font-headline-lg text-headline-lg text-primary">Vision &amp; Mission</h2>
</div>
<div class="grid md:grid-cols-12 gap-lg">
<!-- Vision Card -->
<div class="md:col-span-5 bg-surface-container-lowest p-xl rounded-lg border border-outline-variant shadow-sm hover:shadow-md transition-shadow">
<div class="w-12 h-12 bg-tertiary-fixed rounded-full flex items-center justify-center mb-lg">
<span class="material-symbols-outlined text-primary" data-icon="visibility">visibility</span>
</div>
<h3 class="font-headline-md text-headline-md text-primary mb-md">Vision</h3>
<p class="font-body-md text-body-md text-on-surface-variant">
                            To become a proactive, transparent, and authoritative legislative body that drives progressive change and ensures total accountability within the Faculty of Computer Science student governance.
                        </p>
</div>
<!-- Mission Cards -->
<div class="md:col-span-7 grid gap-md">
<div class="bg-surface-container-lowest p-lg rounded-lg border border-outline-variant flex items-start gap-md">
<div class="mt-1 flex-shrink-0">
<span class="material-symbols-outlined text-info-blue" data-icon="gavel">gavel</span>
</div>
<div>
<h4 class="font-headline-sm text-headline-sm text-slate-text mb-xs">Legislation</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant">Formulating and ratifying regulations that provide a strong legal foundation for all student activities.</p>
</div>
</div>
<div class="bg-surface-container-lowest p-lg rounded-lg border border-outline-variant flex items-start gap-md">
<div class="mt-1 flex-shrink-0">
<span class="material-symbols-outlined text-success-emerald" data-icon="fact_check">fact_check</span>
</div>
<div>
<h4 class="font-headline-sm text-headline-sm text-slate-text mb-xs">Oversight &amp; Audit</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant">Conducting rigorous monitoring and evaluation of BEM programs to guarantee efficiency and alignment with student needs.</p>
</div>
</div>
<div class="bg-surface-container-lowest p-lg rounded-lg border border-outline-variant flex items-start gap-md">
<div class="mt-1 flex-shrink-0">
<span class="material-symbols-outlined text-warning-amber" data-icon="forum">forum</span>
</div>
<div>
<h4 class="font-headline-sm text-headline-sm text-slate-text mb-xs">Aspiration Management</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant">Actively collecting, analyzing, and advocating for student feedback to the faculty administration.</p>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Organizational Structure -->
<section class="py-2xl px-margin-desktop bg-surface">
<div class="max-w-max-width mx-auto">
<div class="text-center mb-xl">
<h2 class="font-headline-lg text-headline-lg text-primary mb-sm">Organizational Structure</h2>
<p class="font-body-md text-body-md text-on-surface-variant">Leadership and Commissions of BLM FIK</p>
</div>
<!-- Leadership Level -->
<div class="flex flex-col md:flex-row justify-center gap-lg mb-xl relative">
<!-- Connecting line for desktop -->
<div class="hidden md:block absolute top-[50%] left-1/2 -translate-x-1/2 w-1/2 h-[1px] bg-outline-variant -z-10"></div>
<div class="bg-surface-container-lowest p-lg rounded-lg border border-outline-variant text-center w-full md:w-64 z-10 shadow-sm relative">
<div class="w-20 h-20 mx-auto rounded-full bg-surface-container-high mb-md border-2 border-primary overflow-hidden">
<img class="object-cover w-full h-full" data-alt="A professional headshot of a student leader in formal academic attire, smiling confidently. Plain light neutral background, bright even lighting, high resolution, portraying a sense of authority and approachability." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDHnNfLIvdEdiOl8EYe3M7EaxZ_KcOOVw_L2-_6KtUft-7QViRjBKkDlnX8RVQfklkeI1K9jl7u9gYrCa6rlSbUkFa1_pPUx2qjZO9slB3VZtwknVwPF3S6Oh1tzEytvKJ7yOlgxEdSWCbxjHq8QKMZQWRkutDk7OCBUzUNOs6g9r7lDAHl6YnG-1ogUE76rZR6tlEIwXgnZP_Q9p9LEpMYJHtoo5GTh2yugbUFLsndlPpedXj2JA"/>
</div>
<h4 class="font-headline-sm text-headline-sm text-primary">Chairman</h4>
<p class="font-label-sm text-label-sm text-on-surface-variant uppercase mt-xs">BLM FIK</p>
</div>
<div class="bg-surface-container-lowest p-lg rounded-lg border border-outline-variant text-center w-full md:w-64 z-10 shadow-sm relative">
<div class="w-20 h-20 mx-auto rounded-full bg-surface-container-high mb-md border-2 border-primary overflow-hidden">
<img class="object-cover w-full h-full" data-alt="A professional headshot of a female student leader in formal academic attire, smiling confidently. Plain light neutral background, bright even lighting, high resolution, portraying a sense of authority and approachability." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCWZv3kGiOHrHR85RTd5UVAfHcMsu_C3YmOjhzR-5Krbgq-MpEreTRtWs8WngdgYynMgELSFSqSlurnEfbQ6nKtQhocy984ogtQQWz5KgB-NlXU7xG6qE4YSAxce26ReyUzvPda9kHcdf-nVQ_e8FI-VhMH8D76paCPHwVPJ6aiOuwTOOLgFdrBKEnJBXo-pJbYLgGL7qf9W7edgCa1ECjBYRdnImePOIi8XTjk0tYurUVGafQC5w"/>
</div>
<h4 class="font-headline-sm text-headline-sm text-primary">Vice Chairman</h4>
<p class="font-label-sm text-label-sm text-on-surface-variant uppercase mt-xs">BLM FIK</p>
</div>
</div>
<!-- Commissions Grid -->
<div class="grid md:grid-cols-3 gap-lg">
<!-- Commission I -->
<div class="bg-surface-container-lowest p-lg rounded-lg border border-outline-variant hover:border-primary/50 transition-colors">
<div class="flex items-center gap-sm mb-md border-b border-outline-variant pb-sm">
<span class="material-symbols-outlined text-info-blue" data-icon="gavel">gavel</span>
<h4 class="font-headline-sm text-headline-sm text-slate-text">Commission I</h4>
</div>
<p class="font-label-md text-label-md text-primary mb-xs">Legislation</p>
<p class="font-body-sm text-body-sm text-on-surface-variant">Drafting internal regulations, reviewing constitutional amendments, and ensuring legal compliance of all student activities.</p>
</div>
<!-- Commission II -->
<div class="bg-surface-container-lowest p-lg rounded-lg border border-outline-variant hover:border-primary/50 transition-colors">
<div class="flex items-center gap-sm mb-md border-b border-outline-variant pb-sm">
<span class="material-symbols-outlined text-warning-amber" data-icon="campaign">campaign</span>
<h4 class="font-headline-sm text-headline-sm text-slate-text">Commission II</h4>
</div>
<p class="font-label-md text-label-md text-primary mb-xs">Aspiration</p>
<p class="font-body-sm text-body-sm text-on-surface-variant">Gathering student feedback, organizing public hearings, and communicating student needs to the faculty administration.</p>
</div>
<!-- Commission III -->
<div class="bg-surface-container-lowest p-lg rounded-lg border border-outline-variant hover:border-primary/50 transition-colors">
<div class="flex items-center gap-sm mb-md border-b border-outline-variant pb-sm">
<span class="material-symbols-outlined text-success-emerald" data-icon="account_balance_wallet">account_balance_wallet</span>
<h4 class="font-headline-sm text-headline-sm text-slate-text">Commission III</h4>
</div>
<p class="font-label-md text-label-md text-primary mb-xs">Budget Control</p>
<p class="font-body-sm text-body-sm text-on-surface-variant">Auditing financial reports of the executive body, ensuring transparent and efficient allocation of student funds.</p>
</div>
</div>
</div>
</section>
@endsection
