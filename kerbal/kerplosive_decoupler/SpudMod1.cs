using UnityEngine;

namespace SpudMod1
{
    public class SpudMod1 : PartModule
    {
        private bool displaySettings = false;

        [KSPEvent(guiActive=true,guiName="Destroy",active=true)]
        public void Destroy()
        {
            RenderingManager.RemoveFromPostDrawQueue(0, OnDraw);
            this.part.explode();
        }

        [KSPEvent(guiActive=true,guiName="Destroy Settings",active=true)]
        public void destroySetting()
        {
            if (displaySettings == true)
            {
                RenderingManager.AddToPostDrawQueue(0, OnDraw);
            }
            else if (displaySettings == false)
            {
                RenderingManager.RemoveFromPostDrawQueue(0, OnDraw);
            }
            displaySettings = !displaySettings;
        }

        public void OnDraw()
        {
            GUI.skin = HighLogic.Skin;
            if(GUI.Button(new Rect(100,100,100,100),"Click Me!")){
            }
        }

    }
}
