<?php
final class Lang {
    public static $TRUE = "1", $FALSE = "0";

    public function __construct($connect = true) {
        $this->index_welcome1 = 'Vítej na ';
	$this->index_welcome2 = '.';
        $this->index_allsins = 'Zde nalezneš vypsány všechny své tresty.';
        $this->header_index = 'Úvod';
        $this->header_bans = 'Bany';
        $this->header_mutes = 'Umlčení';
        $this->header_warnings = 'Varování';
        $this->header_kicks = 'Vyhození';
        $this->page_perm_ban = 'Trvalý ban';
        $this->page_perm_mute = 'Umlčen navždy';
        $this->page_perm_warn = 'Trvalé varování';
        $this->page_expire_ban = '(Odbanován)';
        $this->page_expire_mute = '(Odmlčen)';
        $this->page_expire_warn = '(Vypršel)';
        $this->page_title_ban = 'Bany';
        $this->page_title_mute = 'Umlčení';
        $this->page_title_warn = 'Varování';
        $this->page_title_kick = 'Vyhození';
        $this->page_check_user = "Hráč";
        $this->page_check_submit = "Ověřit";
        $this->page_page = "Strana";
        $this->check_invalid = "Neplatné zadání";
        $this->check_notjoin = "u nás ještě nebyl";
        $this->history_missinguuid = "Chybějící argument (uuid)";
        $this->history_playernotfound = "Hráč nenalezen v databázi";
        $this->history_recentby = "Nedávné tresty od ";
        $this->history_recentfor = "Nedávne tresty pro ";
        $this->history_tabletype = "Typ";
        $this->history_tableplayer = "Hráč";
        $this->history_tablemoderator = "Admin";
        $this->history_tablereason = "Důvod";
        $this->history_tabledate = "Datum";
        $this->history_tableexpires = "Vyprší";
        $this->history_nopunishments = "Nenalezeny žádné tresty";
        $this->history_returnto = "Vrátit se na";
        $this->info_banned_player = "Zabanovaný hráč";
        $this->info_banned_by = "Zabanován kým";
        $this->info_banned_reason = "Důvod banu";
        $this->info_banned_when = "Zabanován do";
        $this->info_banned_expiry = "Zabanován do kdy";
        $this->info_muted_player = "Umlčený hráč";
        $this->info_muted_by = "Umlčen kým";
        $this->info_muted_reason = "Důvod umlčení";
        $this->info_muted_when = "Umlčen kdy";
        $this->info_muted_expiry = "Umlčen do kdy";
        $this->info_warn_name = "Varování";
        $this->info_warn_player = "Varovaný hráč";
        $this->info_warn_by = "Varován kým";
        $this->info_warn_reason = "Důvod varování";
        $this->info_warn_when = "Varován kdy";
        $this->info_warn_expiry = "Varování vyprší";
        $this->info_kick_player = "Vyhozený hráč";
        $this->info_kick_by = "Vyhozen kým";
        $this->info_kick_reason = "Důvod vyhození";
        $this->info_kick_when = "Vyhozen kdy";
        $this->info_error_missingarg = "Neplatné argumenty (typ, id)";
        $this->info_error_unknown = "Vyžádána neznámá stránka";
        $this->info_error_invalidid = "Neplatné ID";
        $this->info_error_notfound1 = "Chyba: ";
        $this->info_error_notfound2 = " nenalezen v databázi";
        $this->info_error_notplayer = "Chyba: Jméno hráče nenalezeno";
        $this->bans_player = "Jméno";
        $this->bans_by = "Zabanován kým";
        $this->bans_reason = "Důvod banu";
        $this->bans_when = "Zabanován kdy";
        $this->bans_expiry = "Zabanován do kdy";
        $this->kicks_player = "Jméno";
        $this->kicks_by = "Vyhozen kým";
        $this->kicks_reason = "Důvod vyhození";
        $this->kicks_when = "Vyhozen kdy";
        $this->mutes_player = "Jméno";
        $this->mutes_by = "Umlčen kým";
        $this->mutes_reason = "Důvod umlčení";
        $this->mutes_when = "Umlčen kdy";
        $this->mutes_expiry = "Umlčen do kdy";
        $this->warns_player = "Jméno";
        $this->warns_by = "Varován kým";
        $this->warns_reason = "Důvod varování";
        $this->warns_when = "Varován kdy";
        $this->warns_receive = "Varování doručeno";
        $this->warns_yes = "Ano";
        $this->warns_no = "Ne";
    }
}
?>
