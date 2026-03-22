# CiviCRM: Lighthouse Tweaks

CiviCRM customizations for seeingindependence.org

The extension is licensed under [GPL-3.0](LICENSE.txt).

## Requirements

* CiviCRM >= 5.0

## Manual SQL configuration changes

It is assumed (and REQUIRED) that the CiviCRM database has already been changed so that the `civicrm_activity.duration` column is a decimal rather than an integer. A query along these lines will do the job:

```
ALTER TABLE `civicrm_activity`
CHANGE `duration` `duration` decimal(10,2) unsigned NULL COMMENT 'Planned or actual duration of activity expressed in minutes. Conglomerate of former duration_hours and duration_minutes.' AFTER `activity_date_time`;
```


## Usage and features
This extension requires no configuration, and provides the following features:

* In the Activity create/edit form, the Duration field is treated as a decimal value with 2 decimal places.

## Installation (Web UI)

This extension has not yet been published for installation via the web UI.

## Installation (CLI, Zip)

Sysadmins and developers may download the `.zip` file for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
cd <extension-dir>
cv dl com.joineryhq.lighthousetweaks@https://github.com/JoineryHQ/com.joineryhq.lighthousetweaks/archive/master.zip
```

## Installation (CLI, Git)

Sysadmins and developers may clone the [Git](https://en.wikipedia.org/wiki/Git) repo for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
git clone https://github.com/JoineryHQ/com.joineryhq.lighthousetweaks.git
cv en lighthousetweaks
```

## Support

Support for this package is handled under Joinery's ["As-Is Support" policy](https://joineryhq.com/software-support-levels#as-is-support).

Public issue queue for this package: https://github.com/JoineryHQ/com.joineryhq.lighthousetweaks/issues
