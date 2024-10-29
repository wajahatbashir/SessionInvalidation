# WB_SessionInvalidation

WB_SessionInvalidation is a Magento 2 module that automatically invalidates active customer sessions when their password is changed from another device or browser, ensuring account security.

## Features

- **Session Invalidation**: Automatically logs out all active sessions when a customer changes their password.
- **Admin Configuration**: Enable or disable session invalidation from the Magento Admin Panel under `Stores > Configuration > Session Invalidation on Password Change`.

## Requirements

- Magento 2.4.X
- PHP 7.4 or 8.1

## Installation

1. **Download and Install**:
   Place the module in `app/code/WB/SessionInvalidation`.

2. **Enable the Module**:
   ```bash
   php bin/magento setup:upgrade
   php bin/magento cache:clean
