<?php

require_once(dirname(__DIR__)."/layouts/header.php");

?>



<div class="w-[300px] bg-ink rounded-[34px] p-2.5 shadow-[0_24px_48px_-18px_rgba(22,38,31,0.45)]">
  <div class="bg-papercard rounded-[26px] overflow-hidden min-h-[560px] flex flex-col relative">
    <div class="w-[90px] h-[22px] bg-ink rounded-b-[14px] mx-auto relative z-[2]"></div>
    <div class="px-5 pt-[18px] pb-[14px]">
      <div class="font-display font-semibold text-xl mb-[3px]">Tableau de bord</div>
      <div class="text-[11.5px] text-inksoft font-mono">Gérant · Session 2026</div>
    </div>
    <div class="border-t-2 border-dashed border-linestrong relative mt-0.5">
      <span class="absolute -top-1.5 -left-4 w-3 h-3 rounded-full bg-ink"></span>
      <span class="absolute -top-1.5 -right-4 w-3 h-3 rounded-full bg-ink"></span>
    </div>
    <div class="px-5 pt-[18px] pb-[26px] flex flex-col gap-4 flex-1">
      <div class="flex gap-2.5">
        <div class="flex-1 bg-white border border-line rounded-xl px-3 py-2.5 flex flex-col gap-[3px]"><span class="text-[9.5px] uppercase tracking-[.05em] text-inksoft font-semibold">Collecté</span><span class="font-mono font-semibold text-[15px] text-forest">486 000 F</span></div>
        <div class="flex-1 bg-white border border-line rounded-xl px-3 py-2.5 flex flex-col gap-[3px]"><span class="text-[9.5px] uppercase tracking-[.05em] text-inksoft font-semibold">Recouvr.</span><span class="font-mono font-semibold text-[15px]">82%</span></div>
        <div class="flex-1 bg-white border border-line rounded-xl px-3 py-2.5 flex flex-col gap-[3px]"><span class="text-[9.5px] uppercase tracking-[.05em] text-inksoft font-semibold">Retards</span><span class="font-mono font-semibold text-[15px] text-brick">6</span></div>
      </div>
      <div class="bg-white border border-line rounded-2xl p-4 flex flex-col gap-3">
        <div class="text-[13px] font-semibold flex justify-between items-center">Avancement hebdomadaire<span class="text-inksoft text-[11.5px] font-normal">sem. 28–34</span></div>
        <div class="flex items-center gap-2.5">
          <span class="w-[78px] text-[11px] font-semibold">Aïssatou D.</span>
          <div class="flex gap-1">
            <div class="w-4 h-4 rounded bg-forest"></div><div class="w-4 h-4 rounded bg-forest"></div><div class="w-4 h-4 rounded bg-forest"></div><div class="w-4 h-4 rounded bg-forest"></div><div class="w-4 h-4 rounded bg-brick"></div><div class="w-4 h-4 rounded bg-forest"></div><div class="w-4 h-4 rounded bg-forest"></div>
          </div>
        </div>
        <div class="flex items-center gap-2.5">
          <span class="w-[78px] text-[11px] font-semibold">Moussa K.</span>
          <div class="flex gap-1">
            <div class="w-4 h-4 rounded bg-forest"></div><div class="w-4 h-4 rounded bg-forest"></div><div class="w-4 h-4 rounded bg-brick"></div><div class="w-4 h-4 rounded bg-forest"></div><div class="w-4 h-4 rounded bg-forest"></div><div class="w-4 h-4 rounded bg-forest"></div><div class="w-4 h-4 rounded bg-line"></div>
          </div>
        </div>
        <div class="flex items-center gap-2.5">
          <span class="w-[78px] text-[11px] font-semibold">Fatou S.</span>
          <div class="flex gap-1">
            <div class="w-4 h-4 rounded bg-forest"></div><div class="w-4 h-4 rounded bg-forest"></div><div class="w-4 h-4 rounded bg-forest"></div><div class="w-4 h-4 rounded bg-forest"></div><div class="w-4 h-4 rounded bg-forest"></div><div class="w-4 h-4 rounded bg-forest"></div><div class="w-4 h-4 rounded bg-line"></div>
          </div>
        </div>
        <div class="flex items-center gap-2.5">
          <span class="w-[78px] text-[11px] font-semibold">Ibrahima T.</span>
          <div class="flex gap-1">
            <div class="w-4 h-4 rounded bg-brick"></div><div class="w-4 h-4 rounded bg-brick"></div><div class="w-4 h-4 rounded bg-forest"></div><div class="w-4 h-4 rounded bg-forest"></div><div class="w-4 h-4 rounded bg-forest"></div><div class="w-4 h-4 rounded bg-line"></div><div class="w-4 h-4 rounded bg-line"></div>
          </div>
        </div>
        <div class="flex gap-3.5 flex-wrap">
          <div class="flex items-center gap-[5px] text-[10px] text-inksoft"><span class="w-2.5 h-2.5 rounded bg-forest"></span>Payé</div>
          <div class="flex items-center gap-[5px] text-[10px] text-inksoft"><span class="w-2.5 h-2.5 rounded bg-brick"></span>Retard</div>
          <div class="flex items-center gap-[5px] text-[10px] text-inksoft"><span class="w-2.5 h-2.5 rounded bg-line"></span>À venir</div>
        </div>
      </div>
      <div class="flex gap-2.5">
        <div class="flex items-center justify-center gap-1.5 px-4 py-3 rounded-[11px] font-semibold text-[13.5px] bg-ink text-white flex-1"><a href="http://mami.cisse.odc.edu.sn:80/index.php?controller=gerant&action=paiement">+ Paiement</a></div>
        <div class="flex items-center justify-center gap-1.5 px-4 py-3 rounded-[11px] font-semibold text-[13.5px] bg-transparent text-ink border-[1.5px] border-ink flex-1"><a href="http://mami.cisse.odc.edu.sn:80/index.php?controller=gerant&action=campagne">+ Campagne</a></div>
      </div>
    </div>
    <div class="mt-auto flex justify-around px-2.5 pt-3 pb-4 border-t border-line bg-white">
      <a href="http://mami.cisse.odc.edu.sn:80/index.php?controller=gerant&action=dashboard" class="flex flex-col items-center gap-1"><div class="w-4 h-4 rounded-[5px] bg-ink"></div><span class="text-[9px] text-ink font-bold">Dashboard</span></a>
      <a href="http://mami.cisse.odc.edu.sn:80/index.php?controller=gerant&action=paiement" class="flex flex-col items-center gap-1"><div class="w-4 h-4 rounded-[5px] bg-line"></div><span class="text-[9px] text-inksoft font-medium">Paiements</span></a>
      <a href="http://mami.cisse.odc.edu.sn:80/index.php?controller=gerant&action=apprenant" class="flex flex-col items-center gap-1"><div class="w-4 h-4 rounded-[5px] bg-line"></div><span class="text-[9px] text-inksoft font-medium">Apprenants</span></a>
      <a href="http://mami.cisse.odc.edu.sn:80/index.php?controller=gerant&action=profile" class="flex flex-col items-center gap-1"><div class="w-4 h-4 rounded-[5px] bg-line"></div><span class="text-[9px] text-inksoft font-medium">Profil</span></a>
    </div>
  </div>
</div>