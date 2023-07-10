import { registerReactControllerComponents } from '@symfony/ux-react';
import './bootstrap.js';

import './styles/app.scss';
import $ from 'jquery';



registerReactControllerComponents(require.context('./react/controllers', true, /\.(j|t)sx?$/));