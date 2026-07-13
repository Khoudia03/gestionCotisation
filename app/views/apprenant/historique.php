<?php

require_once(dirname(__DIR__)."/layouts/header.php");

?>


<div class="w-[300px] bg-ink rounded-[34px] p-2.5 shadow-[0_24px_48px_-18px_rgba(22,38,31,0.45)]">
  <div class="bg-papercard rounded-[26px] overflow-hidden min-h-[560px] flex flex-col relative">
    <div class="w-[90px] h-[22px] bg-ink rounded-b-[14px] mx-auto relative z-[2]"></div>
    <div class="px-5 pt-[18px] pb-[14px]">
      <div class="flex justify-between items-center">
        <div>
          <div class="font-display font-semibold text-xl mb-[3px]">Bonjour, Aïssatou</div>
          <div class="text-[11.5px] text-inksoft font-mono">Cohorte Dev Web · 2026</div>
        </div>
        <div class="w-[34px] h-[34px] rounded-full bg-goldsoft flex-shrink-0"></div>
      </div>
    </div>
    <div class="border-t-2 border-dashed border-linestrong relative mt-0.5">
      <span class="absolute -top-1.5 -left-4 w-3 h-3 rounded-full bg-ink"></span>
      <span class="absolute -top-1.5 -right-4 w-3 h-3 rounded-full bg-ink"></span>
    </div>
    <div class="px-5 pt-[18px] pb-[26px] flex flex-col gap-4 flex-1">
      <div class="bg-ink text-white border-0 rounded-2xl p-4 flex flex-col gap-3">
        <div class="flex justify-between items-center">
          <div>
            <div class="text-[#cfd9d3] text-[11.5px]">Semaines payées</div>
            <div class="font-display text-[26px] font-semibold">32 / 40</div>
          </div>
          <span class="inline-flex items-center gap-[5px] pl-1.5 pr-2.5 py-[3px] rounded-full border-[1.5px] border-dashed border-current font-mono text-[10px] font-semibold tracking-[.05em] uppercase text-brick bg-bricksoft">
            <span class="w-3.5 h-3.5 rounded-full border-[1.5px] border-current flex items-center justify-center text-[8px]">!</span>2 en retard
          </span>
        </div>
        <div class="h-1.5 bg-white/20 rounded-full overflow-hidden"><div class="h-full bg-gold rounded-full" style="width:80%;"></div></div>
      </div>
      <div class="bg-white border border-line rounded-2xl p-4 flex flex-col gap-3">
        <div class="text-[13px] font-semibold">Historique des paiements</div>
        <div class="flex items-center gap-3">
          <div class="flex flex-col gap-1 flex-1"><b class="text-[13px]">Semaine 32</b><span class="text-inksoft text-[11.5px]">12/07/2026</span></div>
          <span class="font-mono font-semibold [font-variant-numeric:tabular-nums] text-forest">2 000 F</span>
        </div>
        <div class="flex items-center gap-3">
          <div class="flex flex-col gap-1 flex-1"><b class="text-[13px]">Semaine 31</b><span class="text-inksoft text-[11.5px]">05/07/2026</span></div>
          <span class="font-mono font-semibold [font-variant-numeric:tabular-nums] text-forest">2 000 F</span>
        </div>
        <div class="flex items-center gap-3">
          <div class="flex flex-col gap-1 flex-1"><b class="text-[13px]">Anniversaire Juin</b><span class="text-inksoft text-[11.5px]">30/06/2026</span></div>
          <span class="font-mono font-semibold [font-variant-numeric:tabular-nums] text-forest">1 500 F</span>
        </div>
      </div>
      <div class="bg-white border border-line rounded-2xl p-4 flex flex-col gap-3">
        <div class="text-[13px] font-semibold">Notifications</div>
        <div class="flex gap-2 px-3 py-2.5 rounded-[10px] text-[11px] leading-[1.5] bg-bricksoft text-brick"><b class="font-bold">Retard —</b> la semaine 33 n'est pas encore réglée.</div>
        <div class="flex gap-2 px-3 py-2.5 rounded-[10px] text-[11px] leading-[1.5] bg-goldsoft text-[#7A5B26]"><b class="font-bold">Campagne ouverte —</b> anniversaires de juillet, à régler avant la fin du mois.</div>
      </div>
    </div>
    <div class="mt-auto flex justify-around px-2.5 pt-3 pb-4 border-t border-line bg-white">
      <a href="http://mami.cisse.odc.edu.sn:80/index.php?controller=apprenant&action=accueil" class="flex flex-col items-center gap-1"><div class="w-4 h-4 rounded-[5px] bg-line"></div><span class="text-[9px] text-ink font-bold">Accueil</span></a>
      <a href="http://mami.cisse.odc.edu.sn:80/index.php?controller=apprenant&action=historique" class="flex flex-col items-center gap-1"><div class="w-4 h-4 rounded-[5px] bg-ink"></div><span class="text-[9px] text-inksoft font-medium">Historique</span></a>
      <a href="http://mami.cisse.odc.edu.sn:80/index.php?controller=apprenant&action=notif" class="flex flex-col items-center gap-1"><div class="w-4 h-4 rounded-[5px] bg-line"></div><span class="text-[9px] text-inksoft font-medium">Notifs</span></a>
      <a href="http://mami.cisse.odc.edu.sn:80/index.php?controller=apprenant&action=profil" class="flex flex-col items-center gap-1"><div class="w-4 h-4 rounded-[5px] bg-line"></div><span class="text-[9px] text-inksoft font-medium">Profil</span></a>
    </div>
  </div>
</div>
</body>
</html>