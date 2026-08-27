@extends('layouts.app')

@section('title', 'Bem')

@section('content')
<!-- Header Section -->
<header class="flex flex-col md:flex-row justify-between items-start md:items-center mb-lg gap-sm">
<div>
<h2 class="font-headline-lg text-headline-lg text-primary">Executive Dashboard</h2>
<p class="font-body-md text-body-md text-on-surface-variant">BEM Internal Program Management</p>
</div>
<button class="bg-primary text-on-primary px-lg py-sm rounded-DEFAULT font-label-md hover:bg-primary/90 transition-colors flex items-center gap-2">
<span class="material-symbols-outlined text-[18px]">add</span>
                Add/Update Program
            </button>
</header>
<!-- Bento Grid Layout -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter">
<!-- Left Column: Budgets & Documents (8 cols) -->
<div class="lg:col-span-8 flex flex-col gap-gutter">
<!-- Budget Management Card -->
<section class="glass-panel rounded-xl p-lg">
<h3 class="font-headline-sm text-headline-sm text-slate-text border-b border-outline-variant pb-sm mb-md flex items-center gap-2">
<span class="material-symbols-outlined text-primary">payments</span>
                        Budget Management
                    </h3>
<div class="grid grid-cols-1 md:grid-cols-2 gap-md">
<div>
<label class="block font-label-sm text-label-sm uppercase text-on-surface-variant mb-xs">Total Budget (IDR)</label>
<input class="w-full border border-outline-variant rounded-DEFAULT p-sm font-headline-sm text-headline-sm text-slate-text bg-surface focus:border-primary focus:ring-1 focus:ring-primary outline-none" type="text" value="Rp 50.000.000"/>
</div>
<div>
<label class="block font-label-sm text-label-sm uppercase text-on-surface-variant mb-xs">Budget Spent (IDR)</label>
<input class="w-full border border-outline-variant rounded-DEFAULT p-sm font-headline-sm text-headline-sm text-slate-text bg-surface focus:border-primary focus:ring-1 focus:ring-primary outline-none" type="text" value="Rp 12.500.000"/>
<div class="mt-xs text-right font-label-sm text-success-emerald">25% Utilized</div>
</div>
</div>
<!-- Visual Progress Bar -->
<div class="mt-md w-full bg-surface-container-highest rounded-full h-2">
<div class="bg-primary h-2 rounded-full" style="width: 25%"></div>
</div>
</section>
<!-- Document Upload Center -->
<section class="glass-panel rounded-xl p-lg">
<h3 class="font-headline-sm text-headline-sm text-slate-text border-b border-outline-variant pb-sm mb-md flex items-center gap-2">
<span class="material-symbols-outlined text-primary">folder_open</span>
                        Document Center
                    </h3>
<div class="grid grid-cols-1 md:grid-cols-3 gap-md">
<!-- Dropzone 1 -->
<div class="border-2 border-dashed border-outline-variant rounded-lg p-md text-center hover:border-primary hover:bg-surface-container-low transition-colors cursor-pointer flex flex-col items-center justify-center min-h-[120px]">
<span class="material-symbols-outlined text-on-surface-variant mb-xs">description</span>
<span class="font-label-md text-label-md text-slate-text block">PDF Proposal</span>
<span class="font-body-sm text-body-sm text-on-surface-variant block mt-xs">Drag &amp; Drop or Click</span>
</div>
<!-- Dropzone 2 -->
<div class="border-2 border-dashed border-outline-variant rounded-lg p-md text-center hover:border-primary hover:bg-surface-container-low transition-colors cursor-pointer flex flex-col items-center justify-center min-h-[120px]">
<span class="material-symbols-outlined text-on-surface-variant mb-xs">task</span>
<span class="font-label-md text-label-md text-slate-text block">PDF LPJ</span>
<span class="font-body-sm text-body-sm text-on-surface-variant block mt-xs">Pending Review</span>
</div>
<!-- Dropzone 3 -->
<div class="border-2 border-dashed border-outline-variant rounded-lg p-md text-center hover:border-primary hover:bg-surface-container-low transition-colors cursor-pointer flex flex-col items-center justify-center min-h-[120px]">
<span class="material-symbols-outlined text-on-surface-variant mb-xs">receipt_long</span>
<span class="font-label-md text-label-md text-slate-text block">Raw Receipts</span>
<span class="font-body-sm text-body-sm text-on-surface-variant block mt-xs">ZIP or PDF</span>
</div>
</div>
</section>
</div>
<!-- Right Column: Evaluation Log (4 cols) -->
<div class="lg:col-span-4 h-full">
<section class="glass-panel rounded-xl h-full flex flex-col">
<div class="p-md border-b border-outline-variant">
<h3 class="font-headline-sm text-headline-sm text-slate-text flex items-center gap-2">
<span class="material-symbols-outlined text-warning-amber">history_edu</span>
                            Evaluation Log
                        </h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-xs">Notes from BLM</p>
</div>
<div class="p-md flex-1 overflow-y-auto space-y-md">
<!-- Log Item 1 -->
<div class="bg-surface p-sm rounded-DEFAULT border border-outline-variant">
<div class="flex justify-between items-start mb-xs">
<span class="bg-error-container text-on-error-container font-label-sm px-2 py-1 rounded-sm uppercase">Revision Required</span>
<span class="font-body-sm text-body-sm text-on-surface-variant text-xs">Today, 10:30 AM</span>
</div>
<p class="font-body-md text-body-md text-slate-text">Budget details for 'Konsumsi' exceed the standard limit. Please revise the LPJ.</p>
</div>
<!-- Log Item 2 -->
<div class="bg-surface p-sm rounded-DEFAULT border border-outline-variant">
<div class="flex justify-between items-start mb-xs">
<span class="bg-tertiary-fixed text-on-tertiary-fixed font-label-sm px-2 py-1 rounded-sm uppercase">Note</span>
<span class="font-body-sm text-body-sm text-on-surface-variant text-xs">Yesterday, 14:15 PM</span>
</div>
<p class="font-body-md text-body-md text-slate-text">Proposal approved. Ensure timeline aligns with the academic calendar.</p>
</div>
</div>
</section>
</div>
</div>
@endsection
