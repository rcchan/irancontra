var videos = [
{ key: 'os1', title: 'Opening Statement by Sen. Inouye', duration: 743, keywords: ['Inouye'] },
{ key: 'os2', title: 'Opening Statement by Rep. Hamilton', duration: 542, keywords: ['Hamilton'] },
{ key: 'os3', title: 'Opening Statement by Sen. Rudman', duration: 149, keywords: ['Rudman'] },
{ key: 'os4', title: 'Opening Statement by Rep. Cheney', duration: 262, keywords: ['Cheney', 'Reagan'] },
{ key: 'rs1', title: 'Secord on Financing the Operation', duration: 950, keywords: ['Nields', 'Secord'] },
{ key: 'rs2', title: 'Secord on The Enterprise\'s Profits', duration: 572, keywords: ['Liman', 'Secord'] },
{ key: 'rs4', title: 'Secord on Misleading Congress', duration: 123, keywords: ['Liman', 'Secord'] },
{ key: 'rs5', title: 'Secord on Reagan\'s Awareness', duration: 65, keywords: ['Stokes', 'Secord', 'Meese'] },
{ key: 'rs6', title: 'Secord and Sen. Boren on Secord\'s Expertise', duration: 318, keywords: ['Boren', 'Secord'] },
{ key: 'rs7', title: 'Secord and Broomfield Discuss Covert Operations', duration: 324, keywords: ['Broomfield', 'Secord', 'Reagan'] },
{ key: 'rm1', title: 'McFarlane on Reagan\'s Meeting With Saudi Leader', duration: 428, keywords: ['Liman', 'McFarlane', 'Reagan'] },
{ key: 'rm2', title: 'McFarlane on Choosing Which Hostages Should Be Freed', duration: 126, keywords: ['Liman', 'McFarlane'] },
{ key: 'rm3', title: 'McFarlane on Legality and Shredding Documents', duration: 273, keywords: ['Liman', 'McFarlane', 'Meese', 'Reagan'] },
{ key: 'rm4', title: 'McFarlane on Supposed �Oil-Drilling Equipment� (Hawk Missiles)', duration: 191, keywords: ['Nields', 'McFarlane', 'Poindexter', 'North'] },
{ key: 'rm5', title: 'McFarlane Contradicting Himself', duration: 294, keywords: ['Leon', 'McFarlane'] },
{ key: 'rm6', title: 'McFarlane and Sen. Rudman on DEA Caper', duration: 274, keywords: ['McFarlane', 'Rudman'] },
{ key: 'rm7', title: 'McFarlane and Sen. Mitchell on Misleading Testimony', duration: 592, keywords: ['Mitchell', 'McFarlane', 'North', 'Meese'] },
{ key: 'rm8', title: 'McFarlane and Sen. Cohen on Casey\'s Influence', duration: 106, keywords: ['McFarlane', 'Cohen', 'Casey', 'North'] },
{ key: 'ac1', title: 'Opening Statement By Calero', duration: 72, keywords: ['Calero'] },
{ key: 'ac2', title: 'Calero on Arms Payments in Consultation with Oliver North', duration: 72, keywords: ['Calero', 'Barbadoro', 'North'] },
{ key: 'ac3', title: 'Calero on Reagan, Casey\'s Involvement', duration: 108, keywords: ['Calero', 'Reagan', 'Casey', 'Mitchell'] },
{ key: 'fr1', title: 'Rodriguez on Bush Meeting', duration: 75, keywords: ['Bush', 'Rodriguez', 'Barbadoro'] },
{ key: 'ea1', title: 'Abrams on "Monitor[ing] Ollie"', duration: 172, keywords: ['Abrams', 'North', 'Belnick'] },
{ key: 'ea2', title: 'Abrams on Soliciting Brunei', duration: 229, keywords: ['Nields', 'Abrams', 'North'] },
{ key: 'ea3', title: 'Abrams Arguing With Rep. Brooks', duration: 149, keywords: ['Brooks', 'Abrams'] },
{ key: 'ea4', title: 'Abrams and Sen. Nunn on Secretly Operating Government', duration: 39, keywords: ['Nunn', 'Abrams'] },
{ key: 'ea5', title: 'Abrams and Sen. Inouye on Being "Immoral"', duration: 206, keywords: ['Abrams', 'Belnick', 'North', 'Shultz'] },
{ key: 'ah1', title: 'Hakim on the $200,000 Death Insurance for North', duration: 515, keywords: ['Hakim', 'Nields', 'North'] },
{ key: 'ah3', title: 'Hakim on North and the Hostages', duration: 350, keywords: ['Hakim', 'North', 'Liman'] },
{ key: 'ah4', title: 'Hakim�s Interactions with North and the Millions Hakim Stood to Make', duration: 276, keywords: ['Hakim', 'North', 'Liman', 'Shultz', 'Reagan'] },
{ key: 'ah5', title: 'Hakim on War with Russia', duration: 348, keywords: ['Hakim', 'Secord', 'Liman', 'North', 'Reagan'] },
{ key: 'ah6', title: 'Hakim Told by Sen. Inouye of the "Drastically Wrong" Situation', duration: 289, keywords: ['Inouye', 'Hakim'] },
{ key: 'fh2', title: 'Hall on Altering Documents', duration: 124, keywords: ['Hall', 'North', 'Belnick'] },
{ key: 'fh3', title: 'North Talks to Hall After Resigning', duration: 60, keywords: ['Hall', 'North', 'Belnick', 'Reagan'] },
{ key: 'fh4', title: 'Hall on Hiding Documents Under Her Clothes', duration: 149, keywords: ['Hall', 'Eggleston', 'North'] },
{ key: 'fh6', title: 'Rep. Foley Questions Hall About Shredding of Documents', duration: 175, keywords: ['Hall', 'Foley', 'North'] },
{ key: 'on1', title: 'North: "What the President Knew"', duration: 368, keywords: ['North', 'Nields', 'Inouye', 'Poindexter', 'Reagan'] },
{ key: 'on2', title: 'North on Shredding', duration: 100, keywords: ['North', 'Nields'] },
{ key: 'on3', title: 'North on More Shredding', duration: 324, keywords: ['North', 'Nields', 'Meese'] },
{ key: 'on4', title: 'North on the Signed Arms-For-Hostages Finding', duration: 712, keywords: ['North', 'Nields', 'Poindexter'] },
{ key: 'on5', title: 'North on Countries Who Wanted to Donate', duration: 110, keywords: ['North', 'Nields'] },
{ key: 'on6', title: 'North on Reagan\'s Knowledge of Private Fundraising', duration: 66, keywords: ['North', 'Nields', 'Reagan'] },
{ key: 'on7', title: 'North on the "Neat Idea" of the Diversion', duration: 157, keywords: ['North', 'Nields'] },
{ key: 'on8', title: 'North on His Family\'s Safety and Meeting Abu Nidal', duration: 297, keywords: ['North', 'Nields'] },
{ key: 'on9', title: 'North on Casey\'s Knowledge About the Diversion', duration: 206, keywords: ['North', 'Nields', 'Casey'] },
{ key: 'on10', title: 'North on Who in the Cabinet Knew What', duration: 298, keywords: ['North', 'Shultz', 'Weinberger', 'McFarlane', 'Nields', 'Oakley'] },
{ key: 'on11', title: 'North on Lying to Congress', duration: 946, keywords: ['North', 'Nields'] },
{ key: 'on12', title: 'North on Why He\'s Not Lying Now', duration: 122, keywords: ['Cleve', 'North'] },
{ key: 'on13', title: 'North on Getting Fired and Covering Up the Diversion', duration: 1174, keywords: ['Poindexter', 'North', 'Liman'] },
{ key: 'on14', title: 'North on Shredding Embarrassing Documents', duration: 227, keywords: ['Liman', 'North'] },
{ key: 'on16', title: 'North on Reagan\'s "Body and Soul" Request', duration: 120, keywords: ['North', 'Reagan', 'Liman'] },
{ key: 'on17', title: 'North on Plausible Deniability', duration: 637, keywords: ['North', 'Liman'] },
{ key: 'new1', title: 'Sen. Mitchell on Patriotism and Disagreement With Government Policies', duration: 258, keywords: ['Mitchell', 'North'] },
{ key: 'on20', title: 'North\'s Final Statement', duration: 43, keywords: ['North'] },
{ key: 'on21', title: 'Rep. Hamilton on Patriotism and the Law', duration: 153, keywords: ['Hamilton', 'North'] },
{ key: 'on22', title: 'Sen. Inouye Compares Hearings to the Nuremberg Trials', duration: 608, keywords: ['North', 'Inouye'] },
{ key: 'jp1', title: 'Poindexter on Destroying the Finding', duration: 812, keywords: ['Liman', 'Poindexter', 'Reagan'] },
{ key: 'jp2', title: 'Poindexter on Reagan\'s Knowledge of Selling Arms to Iran', duration: 377, keywords: ['Liman', 'Poindexter', 'Reagan'] },
{ key: 'jp3', title: 'Poindexter on Insulating Reagan', duration: 457, keywords: ['Liman', 'Poindexter', 'Reagan'] },
{ key: 'jp4', title: 'Poindexter on Boland\'s Application to NSC', duration: 215, keywords: ['Liman', 'Poindexter'] },
{ key: 'jp5', title: 'Poindexter on What Reagan Approved', duration: 235, keywords: ['Liman', 'Poindexter', 'Reagan'] },
{ key: 'jp6', title: 'Poindexter on Reagan\'s Knowledge of North\'s Activities', duration: 146, keywords: ['Liman', 'Poindexter', 'North', 'Reagan'] },
{ key: 'jp7', title: 'Poindexter "Not Recall[ing]" Anything', duration: 427, keywords: ['Liman', 'Poindexter', 'North'] },
{ key: 'jp8', title: 'Sen. Trible Asking Poindexter About the Naval Honor Code ', duration: 101, keywords: ['Trible', 'Poindexter'] },
{ key: 'jp9', title: 'Rep. Hamilton on Where the "Buck Stops"', duration: 177, keywords: ['Hamilton', 'Poindexter'] },
{ key: 'gs1', title: 'Shultz on Opposing Arms For Hostages', duration: 90, keywords: ['Shultz', 'Belnick'] },
{ key: 'gs2', title: 'Shultz on Reagan\'s Insistence on Hostage Recovery', duration: 274, keywords: ['Shultz', 'Belnick', 'Weinberger', 'Reagan'] },
{ key: 'gs3', title: 'Shultz on Advisers Misleading Reagan', duration: 219, keywords: ['Shultz', 'Belnick', 'Reagan', 'Poindexter'] },
{ key: 'gs4', title: 'Shultz on How Reagan Was "Deceived and Lied To"', duration: 58, keywords: ['Shultz', 'Belnick', 'Reagan'] },
{ key: 'gs6', title: 'Shultz on Whether He Was Kept Out of the Loop', duration: 313, keywords: ['Michell', 'Shultz', 'Reagan'] },
{ key: 'gs7', title: 'Rep. DeWine Asks Shultz Why He Kept Himself Unaware', duration: 145, keywords: ['DeWine', 'Shultz'] },
{ key: 'em2', title: 'Meese on What Poindexter and the White House Knew', duration: 260, keywords: ['Meese', 'Reagan', 'Poindexter', 'North', 'Nields'] },
{ key: 'em3', title: 'Meese on Boland\'s Applicability to the NSC', duration: 105, keywords: ['Meese', 'Nields'] },
{ key: 'em4', title: 'Sen. Rudman Asks Meese Why Reagan Did Not Talk to Poindexter or North', duration: 375, keywords: ['Rudman', 'Meese', 'Poindexter', 'North', 'Reagan'] },
{ key: 'em7', title: 'Sen. Nunn Questions Meese About the Questions He Asked', duration: 341, keywords: ['Nunn', 'Meese', 'Poindexter'] },
{ key: 'dr1', title: 'Regan on the "Bait and Switch"', duration: 504, keywords: ['Regan', 'Smiljanich', 'Reagan'] },
{ key: 'dr2', title: 'Regan on "Oil Drilling" as Cover Story and What the President Knew', duration: 70, keywords: ['Regan', 'Smiljanich', 'Reagan'] },
{ key: 'dr3', title: 'Regan Questioned About What He Knew', duration: 191, keywords: ['Regan', 'Smiljanich', 'Reagan', 'Meese'] },
{ key: 'dr4', title: 'President Reagan Refuses to Discuss Pardoning North or Poindexter', duration: 190, keywords: ['Regan', 'Stokes', 'North', 'Poindexter', 'Reagan'] },
{ key: 'dr5', title: 'Sen. Nunn Questions Regan on Wanting Neither Side to Win Iran-Iraq War', duration: 330, keywords: ['Reagan', 'Regan', 'Nunn'] },
{ key: 'cw1', title: 'Weinberger on Who Was Winning the Iran-Iraq War', duration: 170, keywords: ['Eggleston', 'Weinberger', 'Reagan', 'Poindexter'] },
{ key: 'cw2', title: 'Secretary of Defense Weinberger Explains Why He Opposed Selling Weapons to Iran', duration: 339, keywords: ['Aspin', 'Weinberger'] },
{ key: 'cw3', title: 'Rep. Broomfield Questions Weinberger on Iranian Relationship', duration: 245, keywords: ['Broomfield', 'Weinberger'] },
{ key: 'cw4', title: 'Weinberger Tells Sen. Sarbanes About "People With Their Own Agenda"', duration: 162, keywords: ['Sarbanes', 'Weinberger', 'Poindexter', 'Shultz', 'Reagan', 'McFarlane'] },
{ key: 'cw5', title: 'President Reagan Takes Poindexter�s Advice - Contrary to Opinion of Rest of Cabinet', duration: 307, keywords: ['Nunn', 'Weinberger', 'Reagan'] },
{ key: 'cs1', title: 'Closing Statement by Rep. Cheney', duration: 388, keywords: ['Cheney'] },
{ key: 'cs2', title: 'Closing Statement by Sen. Rudman', duration: 565, keywords: ['Rudman'] },
{ key: 'cs3', title: 'Closing Statement by Rep. Hamilton', duration: 304, keywords: ['Hamilton'] },
{ key: 'cs4', title: 'Closing Statement by Sen. Inouye', duration: 602, keywords: ['Inouye'] },
];

