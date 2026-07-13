<?php

require_once(dirname(__DIR__)."/layouts/header.php");

?>


<div class="w-[300px] bg-ink rounded-[34px] p-2.5 shadow-[0_24px_48px_-18px_rgba(22,38,31,0.45)]">
  <div class="bg-papercard rounded-[26px] overflow-hidden min-h-[560px] flex flex-col relative">
    <div class="w-[90px] h-[22px] bg-ink rounded-b-[14px] mx-auto relative z-[2]"></div>
    <div class="px-5 pt-[18px] pb-[14px]">
      <div class="font-display font-semibold text-xl mb-[3px]">Nouveau paiement</div>
      <div class="text-[11.5px] text-inksoft font-mono">Saisie déclarative</div>
    </div>
    <div class="border-t-2 border-dashed border-linestrong relative mt-0.5">
      <span class="absolute -top-1.5 -left-4 w-3 h-3 rounded-full bg-ink"></span>
      <span class="absolute -top-1.5 -right-4 w-3 h-3 rounded-full bg-ink"></span>
    </div>
    <div class="px-5 pt-[18px] pb-[26px] flex flex-col gap-4 flex-1">
      <div class="bg-white border border-line rounded-2xl p-4 flex flex-col gap-3">
        <div>
          <label class="text-[11px] font-semibold text-inksoft uppercase tracking-[.04em] block mb-1.5">Apprenant</label>
          <div class="border-[1.5px] border-linestrong rounded-[10px] px-3 py-[11px] text-[13px] text-inksoft bg-white">Sélectionner un apprenant</div>
        </div>
        <div>
          <label class="text-[11px] font-semibold text-inksoft uppercase tracking-[.04em] block mb-1.5">Type de cotisation</label>
          <div class="flex gap-2 flex-wrap">
            <span class="px-3.5 py-[7px] rounded-full text-[11.5px] font-semibold border-[1.5px] border-ink bg-ink text-white inline-flex">Hebdomadaire</span>
            <span class="px-3.5 py-[7px] rounded-full text-[11.5px] font-semibold border-[1.5px] border-linestrong text-inksoft inline-flex">Anniversaire</span>
            <span class="px-3.5 py-[7px] rounded-full text-[11.5px] font-semibold border-[1.5px] border-linestrong text-inksoft inline-flex">Don libre</span>
          </div>
        </div>
        <div>
          <label class="text-[11px] font-semibold text-inksoft uppercase tracking-[.04em] block mb-1.5">Semaines à couvrir</label>
          <div class="flex gap-2 flex-wrap">
            <span class="px-3.5 py-[7px] rounded-full text-[11.5px] font-semibold border-[1.5px] border-ink bg-ink text-white inline-flex">S31</span>
            <span class="px-3.5 py-[7px] rounded-full text-[11.5px] font-semibold border-[1.5px] border-ink bg-ink text-white inline-flex">S32</span>
            <span class="px-3.5 py-[7px] rounded-full text-[11.5px] font-semibold border-[1.5px] border-linestrong text-inksoft inline-flex">S33</span>
            <span class="px-3.5 py-[7px] rounded-full text-[11.5px] font-semibold border-[1.5px] border-linestrong text-inksoft inline-flex">S34</span>
          </div>
        </div>
        <div>
          <label class="text-[11px] font-semibold text-inksoft uppercase tracking-[.04em] block mb-1.5">Montant reçu</label>
          <div class="border-[1.5px] border-linestrong rounded-[10px] px-3 py-[11px] text-[13px] text-inksoft bg-white">4 000 FCFA</div>
        </div>
        <div class="flex gap-2 px-3 py-2.5 rounded-[10px] text-[11px] leading-[1.5] bg-goldsoft text-[#7A5B26]"><b class="font-bold">Auto —</b> le versement est ventilé sur les semaines consécutives non payées.</div>
        <div class="flex items-center justify-center gap-1.5 px-4 py-3 rounded-[11px] font-semibold text-[13.5px] bg-ink text-white w-full"><a href="http://mami.cisse.odc.edu.sn/index.php?controller=gerant&action=dashboard">Enregistrer le paiement</a></div>
      </div>
    </div>
  </div>
</div>